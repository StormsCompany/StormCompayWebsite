<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->user()->email);
        // Identify the current tenant based on the request (e.g., subdomain, API key, etc.)
        $tenant = $this->identifyTenant($request->getHost());

        // Create a new database configuration dynamically


        $newConfig = null;

        // Add the new configuration to the database connections
        Config::set('database.connections.new_connection', $newConfig);

        // Switch the database connection to the new configuration
        Config::set('database.default', 'new_connection');

        // $tenant = $this->setTenantDatabase();
        // Switch the database connection to the tenant's database
        //  Config::set('database.default', $tenant);

        return $next($request);
    }

    private function identifyTenant($host)
    {
        // Extract the subdomain from the host
        $subdomain = Str::before($host, '.');

        // Use the subdomain to determine the tenant's database connection name
        $tenantConnection = 'tenant_' . $subdomain;

        // dd($tenantConnection);
        // Check if the tenant connection exists in the database configuration
        if (!in_array($tenantConnection, array_keys(config('database.connections')))) {
            // Handle the scenario where the subdomain doesn't match any tenant
            // You can throw an exception, redirect, or take any appropriate action
        }

        return $tenantConnection;
    }

    private function extractSubdomain($host)
    {
        $parsedUrl = parse_url($host);

        $subdomain = explode('.', $parsedUrl['host'])[0];

        return $subdomain;
    }
}

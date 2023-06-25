<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

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
        $tenant = $this->identifyTenant($request);

        // $tenant = $this->setTenantDatabase();
        // Switch the database connection to the tenant's database
        Config::set('database.default', $tenant);

        return $next($request);
    }

    private function identifyTenant($host)
    {
        $subdomain = $this->extractSubdomain($host);

        // Use the subdomain to determine the tenant's database connection name
        $tenantConnection = 'tenant_' . $subdomain;

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
        dd($parsedUrl);
        $subdomain = explode('.', $parsedUrl['host'])[0];

        return $subdomain;
    }
}

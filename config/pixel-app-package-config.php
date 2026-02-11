<?php return array (
  'pixel-app-type' => 'admin-panel-app',
  "tenant-app-root-api" => env( 'TENANT_ROOT_API' ,  "http://127.0.0.1:8000"),
  'pixel-app-package-route-registrars' =>
  array (
    'company-auth' => 'PixelApp\\Routes\\RouteRegistrarTypes\\AuthenticationRoutesRegistrars\\CompanyAuthenticationAPIRoutesRegistrar',
    'user-auth' => 'PixelApp\\Routes\\RouteRegistrarTypes\\AuthenticationRoutesRegistrars\\UserAuthenticationAPIRoutesRegistrar',
    'normal-company-profile' => 'PixelApp\\Routes\\RouteRegistrarTypes\\CompanyAccountRouteRegistrars\\NormalCompanyAccountRouteRegistrars\\NormalCompanyProfileAPIRoutesRegistrar',
    'normal-company-settings' => 'PixelApp\\Routes\\RouteRegistrarTypes\\CompanyAccountRouteRegistrars\\NormalCompanyAccountRouteRegistrars\\NormalCompanySettingsAPIRoutesRegistrar',
    'tenant-company-profile' => 'PixelApp\\Routes\\RouteRegistrarTypes\\CompanyAccountRouteRegistrars\\TenantCompanyAccountRouteRegistrars\\TenantCompanyProfileAPIRoutesRegistrar',
    'tenant-company-resources-configuring' => 'PixelApp\\Routes\\RouteRegistrarTypes\\CompanyAccountRouteRegistrars\\TenantCompanyAccountRouteRegistrars\\TenantCompanyResourcesConfiguringAPIRoutesRegistrar',
    'dropdown-list' =>
    array (
      'branches' => 'PixelApp\\Routes\\RouteRegistrarTypes\\SystemConfigurationRouteRegistrars\\DropdownListRouteRegistrars\\BranchesRouteRegistrar',
      'countries' => 'PixelApp\\Routes\\RouteRegistrarTypes\\SystemConfigurationRouteRegistrars\\DropdownListRouteRegistrars\\CountriesRouteRegistrar',
      'departments' => 'PixelApp\\Routes\\RouteRegistrarTypes\\SystemConfigurationRouteRegistrars\\DropdownListRouteRegistrars\\DepartmentRouteRegistrar',
    ),
    'packages' => 'PixelApp\\Routes\\RouteRegistrarTypes\\SystemConfigurationRouteRegistrars\\PackagesRouteRegistrar',
    'roles-permissions' => 'PixelApp\\Routes\\RouteRegistrarTypes\\SystemConfigurationRouteRegistrars\\RolesAndPermissionsRouteRegistrar',
    'user-profile' => 'PixelApp\\Routes\\RouteRegistrarTypes\\UserAccountRoutesRegistrars\\UserProfileAPIRoutesRegistrar',
    'signup-users-management' => 'PixelApp\\Routes\\RouteRegistrarTypes\\UsersManagementRoutesRegistrars\\SignUpUsersAPIRoutesRegistrar',
    'users-list-management' => 'PixelApp\\Routes\\RouteRegistrarTypes\\UsersManagementRoutesRegistrars\\UsersAPIRoutesRegistrar',
  ),
  'pixel-tenancy-service-provider-class' => 'PixelApp\\ServiceProviders\\RelatedPackagesServiceProviders\\TenancyServiceProvider',
  'user-model-class' => 'PixelApp\\Models\\UsersModule\\PixelUser',
  'tenant-company-model-class' => 'PixelApp\\Models\\CompanyModule\\TenantCompany',
  'optional-relations' =>
  array (
    'branches' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.dropdown-list.branches',
      'table' => 'branches',
    ),
    'departments' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.dropdown-list.departments',
      'table' => 'departments',
    ),
    'cities' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.dropdown-list.cities',
      'table' => 'cities',
    ),
    'countries' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.dropdown-list.countries',
      'table' => 'countries',
    ),
    'geographical-areas' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.dropdown-list.geographical-areas',
      'table' => 'geographical_areas',
    ),
    'main-and-sub-areas' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.dropdown-list.main-and-sub-areas',
      'table' => 'areas',
    ),
    'currencies' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.dropdown-list.currencies',
      'table' => 'currencies',
    ),
    'user-signatures' =>
    array (
      'config_path' => 'pixel-app-package-route-registrars.user-account.user-signatures',
      'table' => 'user_signatures',
    ),
  ),
) ;

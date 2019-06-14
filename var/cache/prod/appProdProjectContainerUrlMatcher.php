<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/common')) {
            // admin_common_pagination
            if (0 === strpos($pathinfo, '/common/pagination') && preg_match('#^/common/pagination(?:/(?P<offset>\\d+)(?:/(?P<limit>\\d+)(?:/(?P<total>\\d+)(?:/(?P<view>full|quicknav))?)?)?)?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_common_pagination']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::paginationAction',  'offset' => 0,  'limit' => 20,  'total' => 0,  'view' => 'full',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_common_pagination;
                }

                return $ret;
            }
            not_admin_common_pagination:

            // admin_common_recommended_modules
            if (0 === strpos($pathinfo, '/common/recommended_modules') && preg_match('#^/common/recommended_modules/(?P<domain>[^/]++)(?:/(?P<limit>\\d+)(?:/(?P<randomize>0|1))?)?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_common_recommended_modules']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::recommendedModulesAction',  'limit' => 0,  'randomize' => 0,));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_common_recommended_modules;
                }

                return $ret;
            }
            not_admin_common_recommended_modules:

            // admin_common_reset_search
            if (0 === strpos($pathinfo, '/common/reset_search') && preg_match('#^/common/reset_search/(?P<controller>[^/]++)/(?P<action>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_common_reset_search']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::resetSearchAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_admin_common_reset_search;
                }

                return $ret;
            }
            not_admin_common_reset_search:

            // admin_common_sidebar
            if (0 === strpos($pathinfo, '/common/sidebar') && preg_match('#^/common/sidebar/(?P<url>[^/]++)(?:/(?P<title>[^/]++)(?:/(?P<footer>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_common_sidebar']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::renderSidebarAction',  'title' => '',  'footer' => '',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_common_sidebar;
                }

                return $ret;
            }
            not_admin_common_sidebar:

        }

        elseif (0 === strpos($pathinfo, '/configure')) {
            if (0 === strpos($pathinfo, '/configure/advanced')) {
                if (0 === strpos($pathinfo, '/configure/advanced/logs')) {
                    // admin_logs_index
                    if ('/configure/advanced/logs' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::indexAction',  '_legacy_controller' => 'AdminLogs',  '_legacy_link' => 'AdminLogs',  '_route' => 'admin_logs_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_logs_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_logs_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_logs_index;
                        }

                        return $ret;
                    }
                    not_admin_logs_index:

                    // admin_logs_save_settings
                    if ('/configure/advanced/logs/settings' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::saveSettingsAction',  '_legacy_controller' => 'AdminLogs',  '_legacy_link' => 'AdminLogs:update',  '_route' => 'admin_logs_save_settings',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_logs_save_settings;
                        }

                        return $ret;
                    }
                    not_admin_logs_save_settings:

                    // admin_logs_delete_all
                    if ('/configure/advanced/logs/delete-all' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::deleteAllAction',  '_legacy_controller' => 'AdminLogs',  '_legacy_link' => 'AdminLogs:deletelog',  '_route' => 'admin_logs_delete_all',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_logs_delete_all;
                        }

                        return $ret;
                    }
                    not_admin_logs_delete_all:

                    // admin_logs_search
                    if ('/configure/advanced/logs/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::searchAction',  '_legacy_controller' => 'AdminLogs',  '_route' => 'admin_logs_search',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_logs_search;
                        }

                        return $ret;
                    }
                    not_admin_logs_search:

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/administration')) {
                    // admin_administration
                    if ('/configure/advanced/administration' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::indexAction',  '_legacy_controller' => 'AdminAdminPreferences',  '_legacy_link' => 'AdminAdminPreferences',  '_route' => 'admin_administration',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_administration;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_administration'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_administration;
                        }

                        return $ret;
                    }
                    not_admin_administration:

                    // admin_administration_save
                    if ('/configure/advanced/administration/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::processFormAction',  '_legacy_controller' => 'AdminAdminPreferences',  '_legacy_link' => 'AdminAdminPreferences:update',  '_route' => 'admin_administration_save',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_administration_save;
                        }

                        return $ret;
                    }
                    not_admin_administration_save:

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/import')) {
                    // admin_import
                    if ('/configure/advanced/import' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::importAction',  '_legacy_controller' => 'AdminImport',  '_legacy_link' => 'AdminImport',  '_route' => 'admin_import',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_import;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_import'));
                        }

                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_admin_import;
                        }

                        return $ret;
                    }
                    not_admin_import:

                    if (0 === strpos($pathinfo, '/configure/advanced/import/file')) {
                        // admin_import_file_upload
                        if ('/configure/advanced/import/file/upload' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::uploadAction',  '_legacy_controller' => 'AdminImport',  '_legacy_link' => 'AdminImport:uploadCsv',  '_route' => 'admin_import_file_upload',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_import_file_upload;
                            }

                            return $ret;
                        }
                        not_admin_import_file_upload:

                        // admin_import_file_delete
                        if ('/configure/advanced/import/file/delete' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::deleteAction',  '_legacy_controller' => 'AdminImport',  '_legacy_link' => 'AdminImport:delete',  '_route' => 'admin_import_file_delete',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_import_file_delete;
                            }

                            return $ret;
                        }
                        not_admin_import_file_delete:

                        // admin_import_file_download
                        if ('/configure/advanced/import/file/download' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::downloadAction',  '_legacy_controller' => 'AdminImport',  '_legacy_link' => 'AdminImport:download',  '_route' => 'admin_import_file_download',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_import_file_download;
                            }

                            return $ret;
                        }
                        not_admin_import_file_download:

                    }

                    // admin_import_sample_download
                    if (0 === strpos($pathinfo, '/configure/advanced/import/sample/download') && preg_match('#^/configure/advanced/import/sample/download/(?P<sampleName>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_import_sample_download']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::downloadSampleAction',  '_legacy_controller' => 'AdminImport',  '_legacy_link' => 'AdminImport:sampleDownload',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_import_sample_download;
                        }

                        return $ret;
                    }
                    not_admin_import_sample_download:

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/performance')) {
                    // admin_performance
                    if ('/configure/advanced/performance' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::indexAction',  '_legacy_controller' => 'AdminPerformance',  '_legacy_link' => 'AdminPerformance',  '_route' => 'admin_performance',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_performance;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_performance'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_performance;
                        }

                        return $ret;
                    }
                    not_admin_performance:

                    // admin_performance_save
                    if ('/configure/advanced/performance/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processFormAction',  '_legacy_controller' => 'AdminPerformance',  '_legacy_link' => 'AdminPerformance:update',  '_route' => 'admin_performance_save',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_performance_save;
                        }

                        return $ret;
                    }
                    not_admin_performance_save:

                    // admin_clear_cache
                    if ('/configure/advanced/performance/clear-cache' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::clearCacheAction',  '_legacy_controller' => 'AdminPerformance',  '_legacy_link' => 'AdminPerformance:empty_smarty_cache',  '_route' => 'admin_clear_cache',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_clear_cache;
                        }

                        return $ret;
                    }
                    not_admin_clear_cache:

                    if (0 === strpos($pathinfo, '/configure/advanced/performance/memcache/servers')) {
                        // admin_servers
                        if ('/configure/advanced/performance/memcache/servers' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::listAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_servers',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_servers;
                            }

                            return $ret;
                        }
                        not_admin_servers:

                        // admin_servers_add
                        if ('/configure/advanced/performance/memcache/servers' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::addAction',  '_legacy_controller' => 'AdminPerformance',  '_legacy_link' => 'AdminPerformance:submitAddServer',  '_route' => 'admin_servers_add',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_servers_add;
                            }

                            return $ret;
                        }
                        not_admin_servers_add:

                        // admin_servers_delete
                        if ('/configure/advanced/performance/memcache/servers' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::deleteAction',  '_legacy_controller' => 'AdminPerformance',  '_legacy_link' => 'AdminPerformance:deleteMemcachedServer',  '_route' => 'admin_servers_delete',);
                            if (!in_array($requestMethod, ['DELETE'])) {
                                $allow = array_merge($allow, ['DELETE']);
                                goto not_admin_servers_delete;
                            }

                            return $ret;
                        }
                        not_admin_servers_delete:

                        // admin_servers_test
                        if ('/configure/advanced/performance/memcache/servers/test' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::testAction',  '_legacy_controller' => 'AdminPerformance',  '_legacy_link' => 'AdminPerformance:test_server',  '_route' => 'admin_servers_test',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_servers_test;
                            }

                            return $ret;
                        }
                        not_admin_servers_test:

                    }

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/system-information')) {
                    // admin_system_information
                    if ('/configure/advanced/system-information' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SystemInformationController::indexAction',  '_legacy_controller' => 'AdminInformation',  '_legacy_link' => 'AdminInformation',  '_route' => 'admin_system_information',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_system_information;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_system_information'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_system_information;
                        }

                        return $ret;
                    }
                    not_admin_system_information:

                    // admin_system_information_check_files
                    if ('/configure/advanced/system-information/files' === $pathinfo && $request->isXmlHttpRequest()) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SystemInformationController::displayCheckFilesAction',  '_legacy_controller' => 'AdminInformation',  '_legacy_link' => 'AdminInformation:checkFiles',  '_route' => 'admin_system_information_check_files',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_system_information_check_files;
                        }

                        return $ret;
                    }
                    not_admin_system_information_check_files:

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/emails')) {
                    // admin_emails_index
                    if ('/configure/advanced/emails' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::indexAction',  '_legacy_controller' => 'AdminEmails',  '_legacy_link' => 'AdminEmails',  '_route' => 'admin_emails_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_emails_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_emails_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_emails_index;
                        }

                        return $ret;
                    }
                    not_admin_emails_index:

                    // admin_emails_search
                    if ('/configure/advanced/emails/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::searchAction',  '_legacy_controller' => 'AdminEmails',  '_legacy_link' => 'AdminEmails:search',  '_route' => 'admin_emails_search',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_emails_search;
                        }

                        return $ret;
                    }
                    not_admin_emails_search:

                    // admin_emails_save_options
                    if ('/configure/advanced/emails/options' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::saveOptionsAction',  '_legacy_controller' => 'AdminEmails',  '_legacy_link' => 'AdminEmails:update',  '_route' => 'admin_emails_save_options',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_emails_save_options;
                        }

                        return $ret;
                    }
                    not_admin_emails_save_options:

                    // admin_emails_send_test
                    if ('/configure/advanced/emails/send-testing-email' === $pathinfo && $request->isXmlHttpRequest()) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::sendTestAction',  '_legacy_controller' => 'AdminEmails',  '_legacy_link' => 'AdminEmails:testEmail',  '_route' => 'admin_emails_send_test',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_emails_send_test;
                        }

                        return $ret;
                    }
                    not_admin_emails_send_test:

                    if (0 === strpos($pathinfo, '/configure/advanced/emails/delete')) {
                        // admin_emails_delete_bulk
                        if ('/configure/advanced/emails/delete-bulk' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::deleteBulkAction',  '_legacy_controller' => 'AdminEmails',  '_legacy_link' => 'AdminEmails:submitBulkdeletemail',  '_route' => 'admin_emails_delete_bulk',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_emails_delete_bulk;
                            }

                            return $ret;
                        }
                        not_admin_emails_delete_bulk:

                        // admin_emails_delete_all
                        if ('/configure/advanced/emails/delete-all' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::deleteAllAction',  '_legacy_controller' => 'AdminEmails',  '_legacy_link' => 'AdminEmails:deleteAll',  '_route' => 'admin_emails_delete_all',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_emails_delete_all;
                            }

                            return $ret;
                        }
                        not_admin_emails_delete_all:

                        // admin_emails_delete
                        if (preg_match('#^/configure/advanced/emails/delete/(?P<mailId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_emails_delete']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController::deleteAction',  '_legacy_controller' => 'AdminEmails',  '_legacy_link' => 'AdminEmails:deletemail',  '_legacy_parameters' =>   array (    'id_mail' => 'mailId',  ),));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_emails_delete;
                            }

                            return $ret;
                        }
                        not_admin_emails_delete:

                    }

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/request-sql')) {
                    // admin_sql_request
                    if ('/configure/advanced/request-sql' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::indexAction',  '_legacy_controller' => 'AdminRequestSql',  '_route' => 'admin_sql_request',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_sql_request;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_sql_request'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_sql_request;
                        }

                        return $ret;
                    }
                    not_admin_sql_request:

                    // admin_sql_request_search
                    if ('/configure/advanced/request-sql/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::searchAction',  '_legacy_controller' => 'AdminRequestSql',  '_route' => 'admin_sql_request_search',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_sql_request_search;
                        }

                        return $ret;
                    }
                    not_admin_sql_request_search:

                    // admin_sql_request_process
                    if ('/configure/advanced/request-sql/settings' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::processFormAction',  '_legacy_controller' => 'AdminRequestSql',  '_route' => 'admin_sql_request_process',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_sql_request_process;
                        }

                        return $ret;
                    }
                    not_admin_sql_request_process:

                    // admin_sql_request_create
                    if ('/configure/advanced/request-sql/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::createAction',  '_legacy_controller' => 'AdminRequestSql',  '_route' => 'admin_sql_request_create',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_admin_sql_request_create;
                        }

                        return $ret;
                    }
                    not_admin_sql_request_create:

                    // admin_sql_request_edit
                    if (0 === strpos($pathinfo, '/configure/advanced/request-sql/edit') && preg_match('#^/configure/advanced/request\\-sql/edit/(?P<sqlRequestId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sql_request_edit']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::editAction',  '_legacy_controller' => 'AdminRequestSql',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_admin_sql_request_edit;
                        }

                        return $ret;
                    }
                    not_admin_sql_request_edit:

                    // admin_sql_request_export
                    if (0 === strpos($pathinfo, '/configure/advanced/request-sql/export') && preg_match('#^/configure/advanced/request\\-sql/export/(?P<sqlRequestId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sql_request_export']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::exportAction',  '_legacy_controller' => 'AdminRequestSql',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_sql_request_export;
                        }

                        return $ret;
                    }
                    not_admin_sql_request_export:

                    if (0 === strpos($pathinfo, '/configure/advanced/request-sql/delete')) {
                        // admin_sql_request_delete
                        if (preg_match('#^/configure/advanced/request\\-sql/delete/(?P<sqlRequestId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sql_request_delete']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::deleteAction',  '_legacy_controller' => 'AdminRequestSql',));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_sql_request_delete;
                            }

                            return $ret;
                        }
                        not_admin_sql_request_delete:

                        // admin_sql_request_delete_bulk
                        if ('/configure/advanced/request-sql/delete/bulk' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::deleteBulkAction',  '_legacy_controller' => 'AdminRequestSql',  '_route' => 'admin_sql_request_delete_bulk',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_sql_request_delete_bulk;
                            }

                            return $ret;
                        }
                        not_admin_sql_request_delete_bulk:

                    }

                    // admin_sql_request_table_columns
                    if (0 === strpos($pathinfo, '/configure/advanced/request-sql/tables') && preg_match('#^/configure/advanced/request\\-sql/tables/(?P<mySqlTableName>[^/]++)/columns$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sql_request_table_columns']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::ajaxTableColumnsAction',  '_legacy_controller' => 'AdminRequestSql',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_sql_request_table_columns;
                        }

                        return $ret;
                    }
                    not_admin_sql_request_table_columns:

                    // admin_sql_request_view
                    if (0 === strpos($pathinfo, '/configure/advanced/request-sql/view') && preg_match('#^/configure/advanced/request\\-sql/view/(?P<sqlRequestId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_sql_request_view']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController::viewAction',  '_legacy_controller' => 'AdminRequestSql',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_sql_request_view;
                        }

                        return $ret;
                    }
                    not_admin_sql_request_view:

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/webservice')) {
                    // admin_webservice
                    if ('/configure/advanced/webservice' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::indexAction',  '_legacy_controller' => 'AdminWebservice',  '_route' => 'admin_webservice',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_webservice;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_webservice'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_webservice;
                        }

                        return $ret;
                    }
                    not_admin_webservice:

                    // admin_webservice_search
                    if ('/configure/advanced/webservice/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::searchAction',  '_legacy_controller' => 'AdminWebservice',  '_route' => 'admin_webservice_search',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_webservice_search;
                        }

                        return $ret;
                    }
                    not_admin_webservice_search:

                    // admin_webservice_settings_save
                    if ('/configure/advanced/webservice/settings' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::processFormAction',  '_legacy_controller' => 'AdminWebservice',  '_route' => 'admin_webservice_settings_save',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_webservice_settings_save;
                        }

                        return $ret;
                    }
                    not_admin_webservice_settings_save:

                    if (0 === strpos($pathinfo, '/configure/advanced/webservice/status')) {
                        // admin_webservice_status_toggle
                        if (preg_match('#^/configure/advanced/webservice/status/(?P<webserviceAccountId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_webservice_status_toggle']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::toggleStatusAction',  '_legacy_controller' => 'AdminWebservice',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_webservice_status_toggle;
                            }

                            return $ret;
                        }
                        not_admin_webservice_status_toggle:

                        // admin_webservice_bulk_enable
                        if ('/configure/advanced/webservice/status/bulk/enable' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::enableMultipleStatusAction',  '_legacy_controller' => 'AdminWebservice',  '_route' => 'admin_webservice_bulk_enable',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_webservice_bulk_enable;
                            }

                            return $ret;
                        }
                        not_admin_webservice_bulk_enable:

                        // admin_webservice_bulk_disable
                        if ('/configure/advanced/webservice/status/bulk/disable' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::disableMultipleStatusAction',  '_legacy_controller' => 'AdminWebservice',  '_route' => 'admin_webservice_bulk_disable',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_webservice_bulk_disable;
                            }

                            return $ret;
                        }
                        not_admin_webservice_bulk_disable:

                    }

                    // admin_webservice_list_create
                    if ('/configure/advanced/webservice/create' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::createAction',  '_legacy_controller' => 'AdminWebservice',  '_route' => 'admin_webservice_list_create',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_webservice_list_create;
                        }

                        return $ret;
                    }
                    not_admin_webservice_list_create:

                    // admin_webservice_list_edit
                    if (0 === strpos($pathinfo, '/configure/advanced/webservice/edit') && preg_match('#^/configure/advanced/webservice/edit/(?P<webserviceAccountId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_webservice_list_edit']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::editAction',  '_legacy_controller' => 'AdminWebservice',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_webservice_list_edit;
                        }

                        return $ret;
                    }
                    not_admin_webservice_list_edit:

                    if (0 === strpos($pathinfo, '/configure/advanced/webservice/delete')) {
                        // admin_delete_single_webservice_log
                        if (preg_match('#^/configure/advanced/webservice/delete/(?P<webserviceAccountId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_delete_single_webservice_log']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::deleteSingleWebserviceAction',  '_legacy_controller' => 'AdminWebservice',));
                            if (!in_array($requestMethod, ['DELETE'])) {
                                $allow = array_merge($allow, ['DELETE']);
                                goto not_admin_delete_single_webservice_log;
                            }

                            return $ret;
                        }
                        not_admin_delete_single_webservice_log:

                        // admin_delete_multiple_webservice_log
                        if ('/configure/advanced/webservice/delete' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController::deleteMultipleWebserviceAction',  '_legacy_controller' => 'AdminWebservice',  '_route' => 'admin_delete_multiple_webservice_log',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_delete_multiple_webservice_log;
                            }

                            return $ret;
                        }
                        not_admin_delete_multiple_webservice_log:

                    }

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced/backups')) {
                    // admin_backups_index
                    if ('/configure/advanced/backups' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::indexAction',  '_legacy_controller' => 'AdminBackup',  '_legacy_link' => 'AdminBackup',  '_route' => 'admin_backups_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_backups_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_backups_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_backups_index;
                        }

                        return $ret;
                    }
                    not_admin_backups_index:

                    // admin_backups_save_options
                    if ('/configure/advanced/backups/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::saveOptionsAction',  '_legacy_controller' => 'AdminBackup',  '_legacy_link' => 'AdminBackup:update',  '_route' => 'admin_backups_save_options',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_backups_save_options;
                        }

                        return $ret;
                    }
                    not_admin_backups_save_options:

                    // admin_backups_create
                    if ('/configure/advanced/backups/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::createAction',  '_legacy_controller' => 'AdminBackup',  '_legacy_link' => 'AdminBackup:addbackup',  '_route' => 'admin_backups_create',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_backups_create;
                        }

                        return $ret;
                    }
                    not_admin_backups_create:

                    // admin_backups_download_view
                    if (0 === strpos($pathinfo, '/configure/advanced/backups/view') && preg_match('#^/configure/advanced/backups/view/(?P<downloadFileName>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_backups_download_view']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::downloadViewAction',  '_legacy_controller' => 'AdminBackup',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_backups_download_view;
                        }

                        return $ret;
                    }
                    not_admin_backups_download_view:

                    // admin_backups_delete
                    if (preg_match('#^/configure/advanced/backups/(?P<deleteFileName>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_backups_delete']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::deleteAction',  '_legacy_controller' => 'AdminBackup',  '_legacy_link' => 'AdminBackup:delete',  '_legacy_parameters' =>   array (    'filename' => 'deleteFileName',  ),));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_admin_backups_delete;
                        }

                        return $ret;
                    }
                    not_admin_backups_delete:

                    // admin_backups_bulk_delete
                    if ('/configure/advanced/backups/bulk-delete/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController::bulkDeleteAction',  '_legacy_controller' => 'AdminBackup',  '_legacy_link' => 'AdminBackup:submitBulkdeletebackup',  '_route' => 'admin_backups_bulk_delete',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_backups_bulk_delete;
                        }

                        return $ret;
                    }
                    not_admin_backups_bulk_delete:

                }

            }

            elseif (0 === strpos($pathinfo, '/configure/shop')) {
                if (0 === strpos($pathinfo, '/configure/shop/preferences/preferences')) {
                    // admin_preferences
                    if ('/configure/shop/preferences/preferences' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\PreferencesController::indexAction',  '_legacy_controller' => 'AdminPreferences',  '_legacy_link' => 'AdminPreferences',  '_route' => 'admin_preferences',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_preferences;
                        }

                        return $ret;
                    }
                    not_admin_preferences:

                    // admin_preferences_save
                    if ('/configure/shop/preferences/preferences' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\PreferencesController::processFormAction',  '_legacy_controller' => 'AdminPreferences',  '_legacy_link' => 'AdminPreferences:update',  '_route' => 'admin_preferences_save',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_preferences_save;
                        }

                        return $ret;
                    }
                    not_admin_preferences_save:

                }

                elseif (0 === strpos($pathinfo, '/configure/shop/product-preferences')) {
                    // admin_product_preferences
                    if ('/configure/shop/product-preferences' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::indexAction',  '_legacy_controller' => 'AdminPPreferences',  '_legacy_link' => 'AdminPPreferences',  '_route' => 'admin_product_preferences',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_product_preferences;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_product_preferences'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_product_preferences;
                        }

                        return $ret;
                    }
                    not_admin_product_preferences:

                    // admin_product_preferences_process
                    if ('/configure/shop/product-preferences/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::processAction',  '_legacy_controller' => 'AdminPPreferences',  '_legacy_link' => 'AdminPPreferences:update',  '_route' => 'admin_product_preferences_process',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_product_preferences_process;
                        }

                        return $ret;
                    }
                    not_admin_product_preferences_process:

                }

                elseif (0 === strpos($pathinfo, '/configure/shop/order-preferences')) {
                    // admin_order_preferences
                    if ('/configure/shop/order-preferences' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderPreferencesController::indexAction',  '_legacy_controller' => 'AdminOrderPreferences',  '_legacy_link' => 'AdminOrderPreferences',  '_route' => 'admin_order_preferences',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_order_preferences;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_order_preferences'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_order_preferences;
                        }

                        return $ret;
                    }
                    not_admin_order_preferences:

                    // admin_order_preferences_save
                    if ('/configure/shop/order-preferences/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderPreferencesController::processAction',  '_legacy_controller' => 'AdminOrderPreferences',  '_legacy_link' => 'AdminOrderPreferences:update',  '_route' => 'admin_order_preferences_save',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_order_preferences_save;
                        }

                        return $ret;
                    }
                    not_admin_order_preferences_save:

                }

                elseif (0 === strpos($pathinfo, '/configure/shop/customer-preferences')) {
                    // admin_customer_preferences
                    if ('/configure/shop/customer-preferences' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerPreferencesController::indexAction',  '_legacy_controller' => 'AdminCustomerPreferences',  '_legacy_link' => 'AdminCustomerPreferences',  '_route' => 'admin_customer_preferences',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_customer_preferences;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_customer_preferences'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_customer_preferences;
                        }

                        return $ret;
                    }
                    not_admin_customer_preferences:

                    // admin_customer_preferences_process
                    if ('/configure/shop/customer-preferences/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerPreferencesController::processAction',  '_legacy_controller' => 'AdminCustomerPreferences',  '_legacy_link' => 'AdminCustomerPreferences:update',  '_route' => 'admin_customer_preferences_process',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_customer_preferences_process;
                        }

                        return $ret;
                    }
                    not_admin_customer_preferences_process:

                }

                elseif (0 === strpos($pathinfo, '/configure/shop/maintenance')) {
                    // admin_maintenance
                    if ('/configure/shop/maintenance' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MaintenanceController::indexAction',  '_legacy_controller' => 'AdminMaintenance',  '_legacy_link' => 'AdminMaintenance',  '_route' => 'admin_maintenance',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_maintenance;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_maintenance'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_maintenance;
                        }

                        return $ret;
                    }
                    not_admin_maintenance:

                    // admin_maintenance_save
                    if ('/configure/shop/maintenance/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MaintenanceController::processFormAction',  '_legacy_controller' => 'AdminMaintenance',  '_legacy_link' => 'AdminMaintenance:update',  '_route' => 'admin_maintenance_save',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_maintenance_save;
                        }

                        return $ret;
                    }
                    not_admin_maintenance_save:

                }

                elseif (0 === strpos($pathinfo, '/configure/shop/seo-urls')) {
                    // admin_metas_index
                    if ('/configure/shop/seo-urls' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::indexAction',  '_legacy_controller' => 'AdminMeta',  '_legacy_link' => 'AdminMeta',  '_route' => 'admin_metas_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_metas_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_metas_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_metas_index;
                        }

                        return $ret;
                    }
                    not_admin_metas_index:

                    // admin_metas_search
                    if ('/configure/shop/seo-urls/' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::searchAction',  '_legacy_controller' => 'AdminMeta',  '_legacy_link' => 'AdminMeta:search',  '_route' => 'admin_metas_search',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_metas_search;
                        }

                        return $ret;
                    }
                    not_admin_metas_search:

                    // admin_metas_create
                    if ('/configure/shop/seo-urls/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::createAction',  '_legacy_controller' => 'AdminMeta',  '_route' => 'admin_metas_create',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_metas_create;
                        }

                        return $ret;
                    }
                    not_admin_metas_create:

                    // admin_metas_edit
                    if (preg_match('#^/configure/shop/seo\\-urls/(?P<metaId>\\d+)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_metas_edit']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::editAction',  '_legacy_controller' => 'AdminMeta',  '_legacy_parameters' =>   array (    'id_meta' => 'metaId',  ),));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_metas_edit;
                        }

                        return $ret;
                    }
                    not_admin_metas_edit:

                    // admin_metas_delete
                    if (preg_match('#^/configure/shop/seo\\-urls/(?P<metaId>\\d+)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_metas_delete']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::deleteAction',  '_legacy_controller' => 'AdminMeta',  '_legacy_link' => 'AdminMeta:deletemeta',  '_legacy_parameters' =>   array (    'id_meta' => 'metaId',  ),));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_admin_metas_delete;
                        }

                        return $ret;
                    }
                    not_admin_metas_delete:

                    // admin_metas_delete_bulk
                    if ('/configure/shop/seo-urls/delete-bulk' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::deleteBulkAction',  '_legacy_controller' => 'AdminMeta',  '_legacy_link' => 'AdminMeta:submitBulkdeletmeta',  '_route' => 'admin_metas_delete_bulk',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_metas_delete_bulk;
                        }

                        return $ret;
                    }
                    not_admin_metas_delete_bulk:

                    // admin_metas_save_options
                    if ('/configure/shop/seo-urls/options' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::saveOptionsAction',  '_legacy_controller' => 'AdminMeta',  '_legacy_link' => 'AdminMeta:update',  '_route' => 'admin_metas_save_options',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_metas_save_options;
                        }

                        return $ret;
                    }
                    not_admin_metas_save_options:

                    // admin_metas_generate_robots_file
                    if ('/configure/shop/seo-urls/generate-robots-file' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController::generateRobotsFileAction',  '_legacy_controller' => 'AdminMeta',  '_legacy_link' => 'AdminMeta:submitRobots',  '_route' => 'admin_metas_generate_robots_file',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_metas_generate_robots_file;
                        }

                        return $ret;
                    }
                    not_admin_metas_generate_robots_file:

                }

            }

            // admin_close_showcase_card
            if ('/configure/showcase-card/close' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShowcaseCardController::closeShowcaseCardAction',  '_route' => 'admin_close_showcase_card',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_admin_close_showcase_card;
                }

                return $ret;
            }
            not_admin_close_showcase_card:

        }

        // admin_security_compromised
        if ('/security/compromised' === $pathinfo) {
            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SecurityController::compromisedAccessAction',  '_route' => 'admin_security_compromised',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_security_compromised;
            }

            return $ret;
        }
        not_admin_security_compromised:

        if (0 === strpos($pathinfo, '/sell')) {
            if (0 === strpos($pathinfo, '/sell/catalog/products')) {
                // admin_product_new
                if ('/sell/catalog/products/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::newAction',  '_route' => 'admin_product_new',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_product_new;
                    }

                    return $ret;
                }
                not_admin_product_new:

                // admin_product_form
                if (preg_match('#^/sell/catalog/products/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_form']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::formAction',  '_legacy_controller' => 'AdminProducts',  '_legacy_param_mapper_class' => 'PrestaShop\\PrestaShop\\Adapter\\Product\\AdminProductDataProvider',  '_legacy_param_mapper_method' => 'mapLegacyParametersProductForm',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_product_form;
                    }

                    return $ret;
                }
                not_admin_product_form:

                // admin_product_virtual_save_action
                if (0 === strpos($pathinfo, '/sell/catalog/products/virtual/save') && preg_match('#^/sell/catalog/products/virtual/save(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_virtual_save_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::saveAction',  'idProduct' => 0,));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_product_virtual_save_action;
                    }

                    return $ret;
                }
                not_admin_product_virtual_save_action:

                if (0 === strpos($pathinfo, '/sell/catalog/products/virtual/remove')) {
                    // admin_product_virtual_remove_file_action
                    if (0 === strpos($pathinfo, '/sell/catalog/products/virtual/remove-file') && preg_match('#^/sell/catalog/products/virtual/remove\\-file(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_virtual_remove_file_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeFileAction',  'idProduct' => 0,));
                    }

                    // admin_product_virtual_remove_action
                    if (preg_match('#^/sell/catalog/products/virtual/remove(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_virtual_remove_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeAction',  'idProduct' => 0,));
                    }

                }

                // admin_product_attachement_add_action
                if (0 === strpos($pathinfo, '/sell/catalog/products/attachment/form/add') && preg_match('#^/sell/catalog/products/attachment/form/add(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_attachement_add_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttachementProductController::addAction',  'idProduct' => 0,));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_product_attachement_add_action;
                    }

                    return $ret;
                }
                not_admin_product_attachement_add_action:

                if (0 === strpos($pathinfo, '/sell/catalog/products/attributes')) {
                    // admin_attribute_get_all
                    if ('/sell/catalog/products/attributes/get-all' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getAllAttributesAction',  '_format' => 'json',  '_route' => 'admin_attribute_get_all',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_attribute_get_all;
                        }

                        return $ret;
                    }
                    not_admin_attribute_get_all:

                    // admin_attribute_generator
                    if ('/sell/catalog/products/attributes/generator' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::attributesGeneratorAction',  '_route' => 'admin_attribute_generator',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_attribute_generator;
                        }

                        return $ret;
                    }
                    not_admin_attribute_generator:

                    // admin_delete_attribute
                    if (preg_match('#^/sell/catalog/products/attributes/(?P<idProduct>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_delete_attribute']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAttributeAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_admin_delete_attribute;
                        }

                        return $ret;
                    }
                    not_admin_delete_attribute:

                    // admin_delete_all_attributes
                    if (0 === strpos($pathinfo, '/sell/catalog/products/attributes/delete-all') && preg_match('#^/sell/catalog/products/attributes/delete\\-all(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_delete_all_attributes']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAllAttributeAction',  'idProduct' => 0,));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_delete_all_attributes;
                        }

                        return $ret;
                    }
                    not_admin_delete_all_attributes:

                    // admin_get_form_images_combination
                    if (0 === strpos($pathinfo, '/sell/catalog/products/attributes/form-images') && preg_match('#^/sell/catalog/products/attributes/form\\-images(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_get_form_images_combination']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getFormImagesAction',  '_format' => 'json',  'idProduct' => 0,));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_get_form_images_combination;
                        }

                        return $ret;
                    }
                    not_admin_get_form_images_combination:

                }

                elseif (0 === strpos($pathinfo, '/sell/catalog/products/image')) {
                    // admin_product_image_upload
                    if (0 === strpos($pathinfo, '/sell/catalog/products/image/upload') && preg_match('#^/sell/catalog/products/image/upload(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_image_upload']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::uploadImageAction',  'idProduct' => 0,));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_product_image_upload;
                        }

                        return $ret;
                    }
                    not_admin_product_image_upload:

                    // admin_product_image_positions
                    if ('/sell/catalog/products/image/positions' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::updateImagePositionAction',  '_route' => 'admin_product_image_positions',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_product_image_positions;
                        }

                        return $ret;
                    }
                    not_admin_product_image_positions:

                    // admin_product_image_form
                    if (0 === strpos($pathinfo, '/sell/catalog/products/image/form') && preg_match('#^/sell/catalog/products/image/form(?:/(?P<idImage>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_image_form']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::formAction',  'idImage' => 0,));
                    }

                    // admin_product_image_delete
                    if (0 === strpos($pathinfo, '/sell/catalog/products/image/delete') && preg_match('#^/sell/catalog/products/image/delete(?:/(?P<idImage>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_image_delete']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::deleteAction',  'idImage' => 0,));
                    }

                }

                elseif (0 === strpos($pathinfo, '/sell/catalog/products/c')) {
                    // admin_category_simple_add_form
                    if ('/sell/catalog/products/categories/add/simple' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CategoryController::addSimpleCategoryFormAction',  '_route' => 'admin_category_simple_add_form',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_category_simple_add_form;
                        }

                        return $ret;
                    }
                    not_admin_category_simple_add_form:

                    // admin_get_ajax_categories
                    if (0 === strpos($pathinfo, '/sell/catalog/products/categories/list') && preg_match('#^/sell/catalog/products/categories/list(?:/(?P<limit>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_get_ajax_categories']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CategoryController::getAjaxCategoriesAction',  '_format' => 'json',  'limit' => 20,));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_get_ajax_categories;
                        }

                        return $ret;
                    }
                    not_admin_get_ajax_categories:

                    if (0 === strpos($pathinfo, '/sell/catalog/products/combinations')) {
                        // admin_combination_generate_form
                        if (0 === strpos($pathinfo, '/sell/catalog/products/combinations/form') && preg_match('#^/sell/catalog/products/combinations/form(?:/(?P<combinationIds>[^/]++))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_combination_generate_form']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::generateCombinationFormAction',  'combinationIds' => 0,));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_combination_generate_form;
                            }

                            return $ret;
                        }
                        not_admin_combination_generate_form:

                        // admin_get_product_combinations
                        if (preg_match('#^/sell/catalog/products/combinations(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_get_product_combinations']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::getProductCombinationsAction',  '_format' => 'json',  'idProduct' => 0,));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_admin_get_product_combinations;
                            }

                            return $ret;
                        }
                        not_admin_get_product_combinations:

                    }

                }

                // admin_feature_get_feature_values
                if (0 === strpos($pathinfo, '/sell/catalog/products/features') && preg_match('#^/sell/catalog/products/features(?:/(?P<idFeature>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_feature_get_feature_values']), array (  'idFeature' => 0,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\FeatureController::getFeatureValuesAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_feature_get_feature_values;
                    }

                    return $ret;
                }
                not_admin_feature_get_feature_values:

                if (0 === strpos($pathinfo, '/sell/catalog/products/specific-prices')) {
                    // admin_specific_price_list
                    if (0 === strpos($pathinfo, '/sell/catalog/products/specific-prices/list') && preg_match('#^/sell/catalog/products/specific\\-prices/list(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_specific_price_list']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::listAction',  '_format' => 'json',  'idProduct' => 0,));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_specific_price_list;
                        }

                        return $ret;
                    }
                    not_admin_specific_price_list:

                    // admin_get_specific_price_update_form
                    if (0 === strpos($pathinfo, '/sell/catalog/products/specific-prices/form') && preg_match('#^/sell/catalog/products/specific\\-prices/form/(?P<idSpecificPrice>\\d+)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_get_specific_price_update_form']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::getUpdateFormAction',  'idSpecificPrice' => 0,));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_get_specific_price_update_form;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_get_specific_price_update_form'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_get_specific_price_update_form;
                        }

                        return $ret;
                    }
                    not_admin_get_specific_price_update_form:

                    // admin_specific_price_add
                    if ('/sell/catalog/products/specific-prices/add' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::addAction',  '_route' => 'admin_specific_price_add',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_specific_price_add;
                        }

                        return $ret;
                    }
                    not_admin_specific_price_add:

                    // admin_specific_price_update
                    if (0 === strpos($pathinfo, '/sell/catalog/products/specific-prices/update') && preg_match('#^/sell/catalog/products/specific\\-prices/update/(?P<idSpecificPrice>\\d+)/$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_specific_price_update']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::updateAction',  'idSpecificPrice' => 0,));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_specific_price_update;
                        }

                        return $ret;
                    }
                    not_admin_specific_price_update:

                    // admin_delete_specific_price
                    if (0 === strpos($pathinfo, '/sell/catalog/products/specific-prices/delete') && preg_match('#^/sell/catalog/products/specific\\-prices/delete(?:/(?P<idSpecificPrice>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_delete_specific_price']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::deleteAction',  'idSpecificPrice' => 0,));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_delete_specific_price;
                        }

                        return $ret;
                    }
                    not_admin_delete_specific_price:

                }

                // admin_supplier_refresh_product_supplier_combination_form
                if (0 === strpos($pathinfo, '/sell/catalog/products/suppliers/refresh-product-supplier-combination-form') && preg_match('#^/sell/catalog/products/suppliers/refresh\\-product\\-supplier\\-combination\\-form(?:/(?P<idProduct>\\d+)(?:/(?P<supplierIds>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_supplier_refresh_product_supplier_combination_form']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SupplierController::refreshProductSupplierCombinationFormAction',  'supplierIds' => 0,  'idProduct' => 0,));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_supplier_refresh_product_supplier_combination_form;
                    }

                    return $ret;
                }
                not_admin_supplier_refresh_product_supplier_combination_form:

                // admin_warehouse_refresh_product_warehouse_combination_form
                if (0 === strpos($pathinfo, '/sell/catalog/products/warehouses/refresh-product-warehouse-combination-form') && preg_match('#^/sell/catalog/products/warehouses/refresh\\-product\\-warehouse\\-combination\\-form(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_warehouse_refresh_product_warehouse_combination_form']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\WarehouseController::refreshProductWarehouseCombinationFormAction',  'idProduct' => 0,));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_warehouse_refresh_product_warehouse_combination_form;
                    }

                    return $ret;
                }
                not_admin_warehouse_refresh_product_warehouse_combination_form:

                // admin_product_catalog
                if (preg_match('#^/sell/catalog/products(?:/(?P<offset>last|\\d+)(?:/(?P<limit>_limit|last|\\d+)(?:/(?P<orderBy>last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering)(?:/(?P<sortOrder>last|asc|desc))?)?)?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_catalog']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogAction',  '_legacy_controller' => 'AdminProducts',  'limit' => 'last',  'offset' => 0,  'orderBy' => 'last',  'sortOrder' => 'last',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_product_catalog;
                    }

                    return $ret;
                }
                not_admin_product_catalog:

                // admin_product_catalog_filters
                if (0 === strpos($pathinfo, '/sell/catalog/products/filters') && preg_match('#^/sell/catalog/products/filters(?:/(?P<quantity>none|<=\\d+|<\\d+|>\\d+|>=\\d+)(?:/(?P<active>none|1|0))?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_catalog_filters']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogFiltersAction',  '_legacy_controller' => 'AdminProducts',  'quantity' => 'none',  'active' => 'none',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_product_catalog_filters;
                    }

                    return $ret;
                }
                not_admin_product_catalog_filters:

                // admin_product_list
                if (0 === strpos($pathinfo, '/sell/catalog/products/list') && preg_match('#^/sell/catalog/products/list(?:/(?P<offset>last|\\d+)(?:/(?P<limit>_limit|last|\\d+)(?:/(?P<orderBy>last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering)(?:/(?P<sortOrder>last|asc|desc)(?:/(?P<view>full|quicknav))?)?)?)?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_list']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::listAction',  'limit' => 'last',  'offset' => 0,  'orderBy' => 'last',  'sortOrder' => 'last',  'view' => 'full',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_product_list;
                    }

                    return $ret;
                }
                not_admin_product_list:

                // admin_product_bulk_action
                if (0 === strpos($pathinfo, '/sell/catalog/products/bulk') && preg_match('#^/sell/catalog/products/bulk/(?P<action>activate_all|deactivate_all|delete_all|duplicate_all)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_bulk_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::bulkAction',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_product_bulk_action;
                    }

                    return $ret;
                }
                not_admin_product_bulk_action:

                // admin_product_unit_action
                if (0 === strpos($pathinfo, '/sell/catalog/products/unit') && preg_match('#^/sell/catalog/products/unit/(?P<action>delete|duplicate|activate|deactivate)/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_unit_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::unitAction',));
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_admin_product_unit_action;
                    }

                    return $ret;
                }
                not_admin_product_unit_action:

                // admin_product_mass_edit_action
                if (0 === strpos($pathinfo, '/sell/catalog/products/massedit') && preg_match('#^/sell/catalog/products/massedit/(?P<action>sort)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_mass_edit_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::massEditAction',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_product_mass_edit_action;
                    }

                    return $ret;
                }
                not_admin_product_mass_edit_action:

                // admin_product_export_action
                if (0 === strpos($pathinfo, '/sell/catalog/products/export') && preg_match('#^/sell/catalog/products/export(?:\\.(?P<_format>csv))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_product_export_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::exportAction',  '_format' => 'csv',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_product_export_action;
                    }

                    return $ret;
                }
                not_admin_product_export_action:

            }

            elseif (0 === strpos($pathinfo, '/sell/orders/delivery-slips')) {
                // admin_order_delivery_slip
                if ('/sell/orders/delivery-slips' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\DeliveryController::slipAction',  '_legacy_controller' => 'AdminDeliverySlip',  '_legacy_link' => 'AdminDeliverySlip',  '_route' => 'admin_order_delivery_slip',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_order_delivery_slip;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_order_delivery_slip'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_order_delivery_slip;
                    }

                    return $ret;
                }
                not_admin_order_delivery_slip:

                // admin_order_delivery_slip_pdf
                if ('/sell/orders/delivery-slips/pdf' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\DeliveryController::generatePdfAction',  '_legacy_controller' => 'AdminDeliverySlip',  '_legacy_link' => 'AdminDeliverySlip:submitAdddelivery',  '_route' => 'admin_order_delivery_slip_pdf',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_order_delivery_slip_pdf;
                    }

                    return $ret;
                }
                not_admin_order_delivery_slip_pdf:

            }

            elseif (0 === strpos($pathinfo, '/sell/orders/invoices')) {
                // admin_order_invoices
                if ('/sell/orders/invoices' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::indexAction',  '_legacy_controller' => 'AdminInvoices',  '_legacy_link' => 'AdminInvoices',  '_route' => 'admin_order_invoices',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_order_invoices;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_order_invoices'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_order_invoices;
                    }

                    return $ret;
                }
                not_admin_order_invoices:

                // admin_order_invoices_process
                if ('/sell/orders/invoices/' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::processAction',  '_legacy_controller' => 'AdminInvoices',  '_legacy_link' => 'AdminInvoices:update',  '_route' => 'admin_order_invoices_process',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_order_invoices_process;
                    }

                    return $ret;
                }
                not_admin_order_invoices_process:

                // admin_order_invoices_generate_by_date
                if ('/sell/orders/invoices/by_date' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::generatePdfByDateAction',  '_legacy_controller' => 'AdminInvoices',  '_legacy_link' => 'AdminInvoices:submitAddinvoice_date',  '_route' => 'admin_order_invoices_generate_by_date',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_order_invoices_generate_by_date;
                    }

                    return $ret;
                }
                not_admin_order_invoices_generate_by_date:

                // admin_order_invoices_generate_by_status
                if ('/sell/orders/invoices/by_status' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController::generatePdfByStatusAction',  '_legacy_controller' => 'AdminInvoices',  '_legacy_link' => 'AdminInvoices:submitAddinvoice_status',  '_route' => 'admin_order_invoices_generate_by_status',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_order_invoices_generate_by_status;
                    }

                    return $ret;
                }
                not_admin_order_invoices_generate_by_status:

            }

            elseif (0 === strpos($pathinfo, '/sell/stocks')) {
                // admin_stock_overview
                if ('/sell/stocks' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\StockController::overviewAction',  '_legacy_link' => 'AdminStockManagement',  '_route' => 'admin_stock_overview',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_stock_overview;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_stock_overview'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_stock_overview;
                    }

                    return $ret;
                }
                not_admin_stock_overview:

                // admin_stock_movements_overview
                if ('/sell/stocks/movements' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\StockController::overviewAction',  '_route' => 'admin_stock_movements_overview',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_stock_movements_overview;
                    }

                    return $ret;
                }
                not_admin_stock_movements_overview:

            }

        }

        elseif (0 === strpos($pathinfo, '/improve')) {
            if (0 === strpos($pathinfo, '/improve/international')) {
                if (0 === strpos($pathinfo, '/improve/international/translations')) {
                    // admin_international_translation_overview
                    if ('/improve/international/translations' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::overviewAction',  '_legacy_link' => 'AdminTranslationSf',  '_route' => 'admin_international_translation_overview',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_international_translation_overview;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_international_translation_overview'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_international_translation_overview;
                        }

                        return $ret;
                    }
                    not_admin_international_translation_overview:

                    if (0 === strpos($pathinfo, '/improve/international/translations/export')) {
                        // admin_international_translations_export_theme
                        if ('/improve/international/translations/export' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::exportThemeLanguageAction',  '_legacy_controller' => 'AdminTranslations',  '_route' => 'admin_international_translations_export_theme',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_international_translations_export_theme;
                            }

                            return $ret;
                        }
                        not_admin_international_translations_export_theme:

                        // admin_international_translations_export_language
                        if ('/improve/international/translations/export-language' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::exportLanguageAction',  '_legacy_controller' => 'AdminTranslations',  '_route' => 'admin_international_translations_export_language',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_international_translations_export_language;
                            }

                            return $ret;
                        }
                        not_admin_international_translations_export_language:

                    }

                    // admin_international_translations_show_settings
                    if ('/improve/international/translations/settings' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::showSettingsAction',  '_legacy_controller' => 'AdminTranslations',  '_legacy_link' => 'AdminTranslations:settings',  '_route' => 'admin_international_translations_show_settings',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_international_translations_show_settings;
                        }

                        return $ret;
                    }
                    not_admin_international_translations_show_settings:

                    // _admin_international_translations_modify
                    if ('/improve/international/translations/modify' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::modifyTranslationsAction',  '_legacy_controller' => 'AdminTranslations',  '_route' => '_admin_international_translations_modify',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not__admin_international_translations_modify;
                        }

                        return $ret;
                    }
                    not__admin_international_translations_modify:

                    // admin_international_translations_add_update_language
                    if ('/improve/international/translations/add-update-language' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::addUpdateLanguageAction',  '_legacy_controller' => 'AdminTranslations',  '_route' => 'admin_international_translations_add_update_language',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_international_translations_add_update_language;
                        }

                        return $ret;
                    }
                    not_admin_international_translations_add_update_language:

                    // admin_international_translations_copy_language
                    if ('/improve/international/translations/copy' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::copyLanguageAction',  '_legacy_controller' => 'AdminTranslations',  '_route' => 'admin_international_translations_copy_language',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_international_translations_copy_language;
                        }

                        return $ret;
                    }
                    not_admin_international_translations_copy_language:

                }

                elseif (0 === strpos($pathinfo, '/improve/international/localization')) {
                    // admin_localization_index
                    if ('/improve/international/localization' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::indexAction',  '_legacy_controller' => 'AdminLocalization',  '_legacy_link' => 'AdminLocalization',  '_route' => 'admin_localization_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_localization_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_localization_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_localization_index;
                        }

                        return $ret;
                    }
                    not_admin_localization_index:

                    // admin_localization_save_options
                    if ('/improve/international/localization/options' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::saveOptionsAction',  '_legacy_controller' => 'AdminLocalization',  '_legacy_link' => 'AdminLocalization:update',  '_route' => 'admin_localization_save_options',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_localization_save_options;
                        }

                        return $ret;
                    }
                    not_admin_localization_save_options:

                    // admin_localization_import_pack
                    if ('/improve/international/localization/import-pack' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController::importPackAction',  '_legacy_controller' => 'AdminLocalization',  '_legacy_link' => 'AdminLocalization:submitLocalizationPack',  '_route' => 'admin_localization_import_pack',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_localization_import_pack;
                        }

                        return $ret;
                    }
                    not_admin_localization_import_pack:

                }

                elseif (0 === strpos($pathinfo, '/improve/international/geolocation')) {
                    // admin_geolocation_index
                    if ('/improve/international/geolocation' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\GeolocationController::indexAction',  '_legacy_controller' => 'AdminGeolocation',  '_legacy_link' => 'AdminGeolocation',  '_route' => 'admin_geolocation_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_admin_geolocation_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_geolocation_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_geolocation_index;
                        }

                        return $ret;
                    }
                    not_admin_geolocation_index:

                    // admin_geolocation_save_options
                    if ('/improve/international/geolocation/process_form' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\GeolocationController::saveOptionsAction',  '_legacy_controller' => 'AdminGeolocation',  '_legacy_link' => 'AdminGeolocation:update',  '_route' => 'admin_geolocation_save_options',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_geolocation_save_options;
                        }

                        return $ret;
                    }
                    not_admin_geolocation_save_options:

                }

            }

            elseif (0 === strpos($pathinfo, '/improve/modules')) {
                if (0 === strpos($pathinfo, '/improve/modules/addons')) {
                    // admin_addons_login
                    if ('/improve/modules/addons/login' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AddonsController::loginAction',  '_route' => 'admin_addons_login',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_addons_login;
                        }

                        return $ret;
                    }
                    not_admin_addons_login:

                    // admin_addons_logout
                    if ('/improve/modules/addons/logout' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AddonsController::logoutAction',  '_route' => 'admin_addons_logout',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_addons_logout;
                        }

                        return $ret;
                    }
                    not_admin_addons_logout:

                    // admin_module_addons_store
                    if ('/improve/modules/addons-store' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\AddonsStoreController::indexAction',  '_legacy_controller' => 'AdminAddonsCatalog',  '_legacy_link' => 'AdminAddonsCatalog',  '_route' => 'admin_module_addons_store',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_module_addons_store;
                        }

                        return $ret;
                    }
                    not_admin_module_addons_store:

                }

                elseif (0 === strpos($pathinfo, '/improve/modules/alerts')) {
                    // admin_module_notification
                    if ('/improve/modules/alerts' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\AlertsController::indexAction',  '_legacy_controller' => 'AdminModulesNotifications',  '_legacy_link' => 'AdminModulesNotifications',  '_route' => 'admin_module_notification',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_module_notification;
                        }

                        return $ret;
                    }
                    not_admin_module_notification:

                    // admin_module_notification_count
                    if ('/improve/modules/alerts/count' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\AlertsController::notificationsCountAction',  '_legacy_controller' => 'AdminModulesNotifications',  '_legacy_link' => 'AdminModulesNotifications:count',  '_route' => 'admin_module_notification_count',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_module_notification_count;
                        }

                        return $ret;
                    }
                    not_admin_module_notification_count:

                }

                // admin_module_cart
                if (0 === strpos($pathinfo, '/improve/modules/cart') && preg_match('#^/improve/modules/cart/(?P<moduleId>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_module_cart']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::getModuleCartAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_module_cart;
                    }

                    return $ret;
                }
                not_admin_module_cart:

                if (0 === strpos($pathinfo, '/improve/modules/catalog')) {
                    // admin_module_catalog
                    if ('/improve/modules/catalog' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::catalogAction',  '_legacy_controller' => 'AdminModulesCatalog',  '_legacy_link' => 'AdminModulesCatalog',  '_route' => 'admin_module_catalog',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_module_catalog;
                        }

                        return $ret;
                    }
                    not_admin_module_catalog:

                    // admin_module_catalog_refresh
                    if (0 === strpos($pathinfo, '/improve/modules/catalog/refresh') && preg_match('#^/improve/modules/catalog/refresh(?:/(?P<category>[^/]++)(?:/(?P<keyword>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_module_catalog_refresh']), array (  'category' => NULL,  'keyword' => NULL,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::refreshCatalogAction',  '_legacy_controller' => 'AdminModulesCatalog',  '_legacy_link' => 'AdminModulesCatalog:refresh',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_module_catalog_refresh;
                        }

                        return $ret;
                    }
                    not_admin_module_catalog_refresh:

                    // admin_module_catalog_post
                    if ('/improve/modules/catalog/recommended' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::getPreferredModulesAction',  '_legacy_controller' => 'AdminModulesCatalog',  '_legacy_link' => 'AdminModulesCatalog:recommended',  '_route' => 'admin_module_catalog_post',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_module_catalog_post;
                        }

                        return $ret;
                    }
                    not_admin_module_catalog_post:

                }

                elseif (0 === strpos($pathinfo, '/improve/modules/manage')) {
                    // admin_module_manage
                    if (preg_match('#^/improve/modules/manage(?:/(?P<category>[^/]++)(?:/(?P<keyword>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_module_manage']), array (  'category' => NULL,  'keyword' => NULL,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::manageAction',  '_legacy_controller' => 'AdminModulesManage',  '_legacy_link' =>   array (    0 => 'AdminModulesManage',    1 => 'AdminModulesSf',  ),));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_module_manage;
                        }

                        return $ret;
                    }
                    not_admin_module_manage:

                    if (0 === strpos($pathinfo, '/improve/modules/manage/action')) {
                        // admin_module_manage_action
                        if (preg_match('#^/improve/modules/manage/action/(?P<action>install|uninstall|enable|disable|enable_mobile|disable_mobile|reset|upgrade)/(?P<module_name>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_module_manage_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::moduleAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_admin_module_manage_action;
                            }

                            return $ret;
                        }
                        not_admin_module_manage_action:

                        // admin_module_configure_action
                        if (0 === strpos($pathinfo, '/improve/modules/manage/action/configure') && preg_match('#^/improve/modules/manage/action/configure/(?P<module_name>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_module_configure_action']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::configureModuleAction',  '_legacy_controller' => 'AdminModules',));
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                                goto not_admin_module_configure_action;
                            }

                            return $ret;
                        }
                        not_admin_module_configure_action:

                    }

                    // admin_module_manage_action_bulk
                    if (0 === strpos($pathinfo, '/improve/modules/manage/bulk') && preg_match('#^/improve/modules/manage/bulk/(?P<action>install|uninstall|configure|enable|disable|reset|upgrade)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_module_manage_action_bulk']), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::moduleAction',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_module_manage_action_bulk;
                        }

                        return $ret;
                    }
                    not_admin_module_manage_action_bulk:

                    // admin_module_manage_update_all
                    if ('/improve/modules/manage/update/all' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::moduleAction',  '_route' => 'admin_module_manage_update_all',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_admin_module_manage_update_all;
                        }

                        return $ret;
                    }
                    not_admin_module_manage_update_all:

                }

                // admin_module_import
                if ('/improve/modules/import' === $pathinfo) {
                    $ret = array (  'module_name' => NULL,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController::importModuleAction',  '_route' => 'admin_module_import',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_module_import;
                    }

                    return $ret;
                }
                not_admin_module_import:

                // admin_module_updates
                if ('/improve/modules/updates' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\UpdatesController::indexAction',  '_legacy_controller' => 'AdminModulesUpdates',  '_legacy_link' => 'AdminModulesUpdates',  '_route' => 'admin_module_updates',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_module_updates;
                    }

                    return $ret;
                }
                not_admin_module_updates:

            }

            // admin_theme_catalog
            if ('/improve/design/themes-catalog' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeCatalogController::indexAction',  '_legacy_controller' => 'AdminThemesCatalog',  '_legacy_link' => 'AdminThemesCatalog',  '_route' => 'admin_theme_catalog',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_theme_catalog;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_theme_catalog'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_theme_catalog;
                }

                return $ret;
            }
            not_admin_theme_catalog:

            if (0 === strpos($pathinfo, '/improve/design/modules/positions')) {
                // admin_modules_positions
                if ('/improve/design/modules/positions' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\PositionsController::indexAction',  '_legacy_controller' => 'AdminModulesPositions',  '_legacy_link' => 'AdminModulesPositions',  '_route' => 'admin_modules_positions',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_modules_positions;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_modules_positions'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_modules_positions;
                    }

                    return $ret;
                }
                not_admin_modules_positions:

                // admin_modules_positions_unhook
                if ('/improve/design/modules/positions/unhook' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\PositionsController::unhookAction',  '_legacy_controller' => 'AdminModulesPositions',  '_legacy_link' => 'AdminModulesPositions:unhook',  '_route' => 'admin_modules_positions_unhook',);
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_admin_modules_positions_unhook;
                    }

                    return $ret;
                }
                not_admin_modules_positions_unhook:

            }

            // admin_payment_methods
            if ('/improve/payment/payment_methods' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentMethodsController::indexAction',  '_legacy_controller' => 'AdminPayment',  '_legacy_link' => 'AdminPayment',  '_route' => 'admin_payment_methods',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_payment_methods;
                }

                return $ret;
            }
            not_admin_payment_methods:

            if (0 === strpos($pathinfo, '/improve/payment/preferences')) {
                // admin_payment_preferences
                if ('/improve/payment/preferences' === $pathinfo) {
                    $ret = array (  '_legacy_controller' => 'AdminPaymentPreferences',  '_legacy_link' => 'AdminPaymentPreferences',  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentPreferencesController::indexAction',  '_route' => 'admin_payment_preferences',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_payment_preferences;
                    }

                    return $ret;
                }
                not_admin_payment_preferences:

                // admin_payment_preferences_process
                if ('/improve/payment/preferences' === $pathinfo) {
                    $ret = array (  '_legacy_controller' => 'AdminPaymentPreferences',  '_legacy_link' => 'AdminPaymentPreferences:update',  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentPreferencesController::processFormAction',  '_route' => 'admin_payment_preferences_process',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_payment_preferences_process;
                    }

                    return $ret;
                }
                not_admin_payment_preferences_process:

            }

            elseif (0 === strpos($pathinfo, '/improve/shipping/preferences')) {
                // admin_shipping_preferences
                if ('/improve/shipping/preferences' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController::indexAction',  '_legacy_controller' => 'AdminShipping',  '_legacy_link' => 'AdminShipping',  '_route' => 'admin_shipping_preferences',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_shipping_preferences;
                    }

                    return $ret;
                }
                not_admin_shipping_preferences:

                // admin_shipping_preferences_save
                if ('/improve/shipping/preferences' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController::processFormAction',  '_legacy_controller' => 'AdminShipping',  '_legacy_link' => 'AdminShipping:update',  '_route' => 'admin_shipping_preferences_save',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_shipping_preferences_save;
                    }

                    return $ret;
                }
                not_admin_shipping_preferences_save:

            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/s')) {
                if (0 === strpos($pathinfo, '/api/stocks')) {
                    // api_stock_list_products
                    if ('/api/stocks' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock.controller:listProductsAction',  '_route' => 'api_stock_list_products',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_stock_list_products;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_stock_list_products'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_stock_list_products;
                        }

                        return $ret;
                    }
                    not_api_stock_list_products:

                    // api_stock_list_products_export
                    if ('/api/stocks/export' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock.controller:listProductsExportAction',  '_route' => 'api_stock_list_products_export',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_stock_list_products_export;
                        }

                        return $ret;
                    }
                    not_api_stock_list_products_export:

                    // api_stock_list_product_combinations
                    if (preg_match('#^/api/stocks/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_stock_list_product_combinations']), array (  '_controller' => 'prestashop.core.api.stock.controller:listProductsAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_stock_list_product_combinations;
                        }

                        return $ret;
                    }
                    not_api_stock_list_product_combinations:

                    if (0 === strpos($pathinfo, '/api/stocks/product')) {
                        // api_stock_edit_product
                        if (preg_match('#^/api/stocks/product/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_stock_edit_product']), array (  '_controller' => 'prestashop.core.api.stock.controller:editProductAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_stock_edit_product;
                            }

                            return $ret;
                        }
                        not_api_stock_edit_product:

                        // api_stock_edit_product_combination
                        if (preg_match('#^/api/stocks/product/(?P<productId>\\d+)/combination/(?P<combinationId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_stock_edit_product_combination']), array (  '_controller' => 'prestashop.core.api.stock.controller:editProductAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_stock_edit_product_combination;
                            }

                            return $ret;
                        }
                        not_api_stock_edit_product_combination:

                        // api_stock_bulk_edit_products
                        if ('/api/stocks/products' === $pathinfo) {
                            $ret = array (  '_controller' => 'prestashop.core.api.stock.controller:bulkEditProductsAction',  '_route' => 'api_stock_bulk_edit_products',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_api_stock_bulk_edit_products;
                            }

                            return $ret;
                        }
                        not_api_stock_bulk_edit_products:

                    }

                }

                elseif (0 === strpos($pathinfo, '/api/stock-movements')) {
                    // api_stock_list_movements
                    if ('/api/stock-movements' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsAction',  '_route' => 'api_stock_list_movements',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_api_stock_list_movements;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_stock_list_movements'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_stock_list_movements;
                        }

                        return $ret;
                    }
                    not_api_stock_list_movements:

                    // api_stock_product_list_movements
                    if (0 === strpos($pathinfo, '/api/stock-movements/product') && preg_match('#^/api/stock\\-movements/product/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_stock_product_list_movements']), array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_stock_product_list_movements;
                        }

                        return $ret;
                    }
                    not_api_stock_product_list_movements:

                    // api_stock_list_movements_employees
                    if ('/api/stock-movements/employees' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsEmployeesAction',  '_route' => 'api_stock_list_movements_employees',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_stock_list_movements_employees;
                        }

                        return $ret;
                    }
                    not_api_stock_list_movements_employees:

                    // api_stock_list_movements_types
                    if ('/api/stock-movements/types' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsTypesAction',  '_route' => 'api_stock_list_movements_types',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_api_stock_list_movements_types;
                        }

                        return $ret;
                    }
                    not_api_stock_list_movements_types:

                }

                // api_stock_list_suppliers
                if ('/api/suppliers' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.supplier.controller:listSuppliersAction',  '_route' => 'api_stock_list_suppliers',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_stock_list_suppliers;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_stock_list_suppliers'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_api_stock_list_suppliers;
                    }

                    return $ret;
                }
                not_api_stock_list_suppliers:

            }

            // api_stock_list_manufacturers
            if ('/api/manufacturers' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'prestashop.core.api.manufacturer.controller:listManufacturersAction',  '_route' => 'api_stock_list_manufacturers',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_api_stock_list_manufacturers;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_stock_list_manufacturers'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_api_stock_list_manufacturers;
                }

                return $ret;
            }
            not_api_stock_list_manufacturers:

            // api_stock_list_categories
            if ('/api/categories' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'prestashop.core.api.category.controller:listCategoriesAction',  '_route' => 'api_stock_list_categories',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_api_stock_list_categories;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_stock_list_categories'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_api_stock_list_categories;
                }

                return $ret;
            }
            not_api_stock_list_categories:

            // api_stock_list_attributes
            if ('/api/attributes' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'prestashop.core.api.attribute.controller:listAttributesAction',  '_route' => 'api_stock_list_attributes',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_api_stock_list_attributes;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_stock_list_attributes'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_api_stock_list_attributes;
                }

                return $ret;
            }
            not_api_stock_list_attributes:

            // api_stock_list_features
            if ('/api/features' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'prestashop.core.api.feature.controller:listFeaturesAction',  '_route' => 'api_stock_list_features',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_api_stock_list_features;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_stock_list_features'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_api_stock_list_features;
                }

                return $ret;
            }
            not_api_stock_list_features:

            // api_i18n_translations_list
            if (0 === strpos($pathinfo, '/api/i18n') && preg_match('#^/api/i18n/(?P<page>\\w+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_i18n_translations_list']), array (  '_controller' => 'prestashop.core.api.i18n.controller:listTranslationAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_api_i18n_translations_list;
                }

                return $ret;
            }
            not_api_i18n_translations_list:

            // api_improve_design_positions_update
            if ('/api/improve/design/positions/update' === $pathinfo) {
                $ret = array (  '_controller' => 'prestashop.core.api.improve.design.postions.controller:updateAction',  '_legacy_controller' => 'AdminModulesPositions',  '_route' => 'api_improve_design_positions_update',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_api_improve_design_positions_update;
                }

                return $ret;
            }
            not_api_improve_design_positions_update:

            if (0 === strpos($pathinfo, '/api/translations')) {
                // api_translation_domains_tree
                if (0 === strpos($pathinfo, '/api/translations/tree') && preg_match('#^/api/translations/tree/(?P<lang>[^/]++)/(?P<type>[^/]++)(?:/(?P<selected>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_translation_domains_tree']), array (  '_controller' => 'prestashop.core.api.translation.controller:listTreeAction',  'selected' => NULL,));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_api_translation_domains_tree;
                    }

                    return $ret;
                }
                not_api_translation_domains_tree:

                // api_translation_domain_catalog
                if (preg_match('#^/api/translations/(?P<locale>[^/]++)/(?P<domain>[^/]++)(?:/(?P<theme>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'api_translation_domain_catalog']), array (  '_controller' => 'prestashop.core.api.translation.controller:listDomainTranslationAction',  'theme' => NULL,));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_api_translation_domain_catalog;
                    }

                    return $ret;
                }
                not_api_translation_domain_catalog:

                // api_translation_value_edit
                if ('/api/translations/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.translation.controller:translationEditAction',  '_route' => 'api_translation_value_edit',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_api_translation_value_edit;
                    }

                    return $ret;
                }
                not_api_translation_value_edit:

                // api_translation_value_reset
                if ('/api/translations/reset' === $pathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.translation.controller:translationResetAction',  '_route' => 'api_translation_value_reset',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_api_translation_value_reset;
                    }

                    return $ret;
                }
                not_api_translation_value_reset:

            }

        }

        elseif (0 === strpos($pathinfo, '/modules/link-widget')) {
            // admin_link_block_list
            if ('/modules/link-widget/list' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::listAction',  '_legacy_controller' => 'AdminLinkWidget',  '_legacy_link' => 'AdminLinkWidget',  '_route' => 'admin_link_block_list',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_admin_link_block_list;
                }

                return $ret;
            }
            not_admin_link_block_list:

            if (0 === strpos($pathinfo, '/modules/link-widget/create')) {
                // admin_link_block_create
                if ('/modules/link-widget/create' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::createAction',  '_legacy_controller' => 'AdminLinkWidget',  '_route' => 'admin_link_block_create',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_link_block_create;
                    }

                    return $ret;
                }
                not_admin_link_block_create:

                // admin_link_block_create_process
                if ('/modules/link-widget/create' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::createProcessAction',  '_legacy_controller' => 'AdminLinkWidget',  '_route' => 'admin_link_block_create_process',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_link_block_create_process;
                    }

                    return $ret;
                }
                not_admin_link_block_create_process:

            }

            elseif (0 === strpos($pathinfo, '/modules/link-widget/edit')) {
                // admin_link_block_edit
                if (preg_match('#^/modules/link\\-widget/edit/(?P<linkBlockId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_link_block_edit']), array (  '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::editAction',  '_legacy_controller' => 'AdminLinkWidget',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_link_block_edit;
                    }

                    return $ret;
                }
                not_admin_link_block_edit:

                // admin_link_block_edit_process
                if (preg_match('#^/modules/link\\-widget/edit/(?P<linkBlockId>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_link_block_edit_process']), array (  '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::editProcessAction',  '_legacy_controller' => 'AdminLinkWidget',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_admin_link_block_edit_process;
                    }

                    return $ret;
                }
                not_admin_link_block_edit_process:

            }

            // admin_link_block_delete
            if (0 === strpos($pathinfo, '/modules/link-widget/delete') && preg_match('#^/modules/link\\-widget/delete/(?P<linkBlockId>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_link_block_delete']), array (  '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::deleteAction',  '_legacy_controller' => 'AdminLinkWidget',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_admin_link_block_delete;
                }

                return $ret;
            }
            not_admin_link_block_delete:

            // admin_link_block_update_positions
            if (0 === strpos($pathinfo, '/modules/link-widget/update-positions') && preg_match('#^/modules/link\\-widget/update\\-positions/(?P<hookId>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_link_block_update_positions']), array (  '_controller' => 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::updatePositionsAction',  '_legacy_controller' => 'AdminLinkWidget',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_admin_link_block_update_positions;
                }

                return $ret;
            }
            not_admin_link_block_update_positions:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Bosh sahifa</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-default">Asosiy </a></li>
                        <li><a href="products" key="products">Mahsulotlar</a></li>
                        <li><a href="trade" key="trade">Savdo xisoboti</a></li>
                        <li><a href="report" key="report">Xisobot</a></li>

                    </ul>
                </li>

               <li class="menu-title" key="t-apps"><?php echo app('translator')->get('translation.Apps'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-calendar"></i><span class="badge rounded-pill bg-success float-end">New</span>
                        <span key="t-dashboards"><?php echo app('translator')->get('translation.Calendars'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar-full" key="t-full-calendar"><?php echo app('translator')->get('translation.Full_Calendar'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Kerakli kelajakda</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products" key="t-products"><?php echo app('translator')->get('translation.Products'); ?></a></li>
                        <li><a href="ecommerce-product-detail"
                                key="t-product-detail"><?php echo app('translator')->get('translation.Product_Detail'); ?></a></li>
                        <li><a href="ecommerce-orders" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="ecommerce-customers" key="t-customers"><?php echo app('translator')->get('translation.Customers'); ?></a></li>
                        <li><a href="ecommerce-cart" key="t-cart"><?php echo app('translator')->get('translation.Cart'); ?></a></li>
                        <li><a href="ecommerce-checkout" key="t-checkout"><?php echo app('translator')->get('translation.Checkout'); ?></a></li>
                        <li><a href="ecommerce-shops" key="t-shops"><?php echo app('translator')->get('translation.Shops'); ?></a></li>
                        <li><a href="ecommerce-add-product" key="t-add-product"><?php echo app('translator')->get('translation.Add_Product'); ?></a></li>
                        <li><a href="crypto-orders" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="blog-list" key="t-blog-list"><?php echo app('translator')->get('translation.Blog_List'); ?></a></li>
                        <li><a href="blog-grid" key="t-blog-grid"><?php echo app('translator')->get('translation.Blog_Grid'); ?></a></li>
                        <li><a href="blog-details" key="t-blog-details"><?php echo app('translator')->get('translation.Blog_Details'); ?></a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Profil</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-profile" key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></a></li>
                        <li><a href="pages-404" key="t-error-404"><?php echo app('translator')->get('translation.Error_404'); ?></a></li>
                        <li><a href="pages-500" key="t-error-500"><?php echo app('translator')->get('translation.Error_500'); ?></a></li>
                    </ul>
                </li>



                <li class="menu-title" key="t-pages"><?php echo app('translator')->get('translation.Pages'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end"
                            key="t-new"><?php echo app('translator')->get('translation.New'); ?></span>
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication"><?php echo app('translator')->get('translation.Authentication'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" key="t-login"><?php echo app('translator')->get('translation.Login'); ?></a></li>
                        <li><a href="auth-login-2" key="t-login-2"><?php echo app('translator')->get('translation.Login'); ?> 2</a></li>
                        <li><a href="auth-register" key="t-register"><?php echo app('translator')->get('translation.Register'); ?></a></li>
                        <li><a href="auth-register-2" key="t-register-2"><?php echo app('translator')->get('translation.Register'); ?> 2</a></li>
                        <li><a href="auth-recoverpw" key="t-recover-password"><?php echo app('translator')->get('translation.Recover_Password'); ?></a>
                        </li>
                        <li><a href="auth-recoverpw-2" key="t-recover-password-2"><?php echo app('translator')->get('translation.Recover_Password'); ?>
                                2</a></li>
                        <li><a href="auth-lock-screen" key="t-lock-screen"><?php echo app('translator')->get('translation.Lock_Screen'); ?></a></li>
                        <li><a href="auth-lock-screen-2" key="t-lock-screen-2"><?php echo app('translator')->get('translation.Lock_Screen'); ?> 2</a>
                        </li>
                        <li><a href="auth-confirm-mail" key="t-confirm-mail"><?php echo app('translator')->get('translation.Confirm_Mail'); ?></a></li>
                        <li><a href="auth-confirm-mail-2" key="t-confirm-mail-2"><?php echo app('translator')->get('translation.Confirm_Mail'); ?> 2</a>
                        </li>
                        <li><a href="auth-email-verification"
                                key="t-email-verification"><?php echo app('translator')->get('translation.Email_verification'); ?></a></li>
                        <li><a href="auth-email-verification-2"
                                key="t-email-verification-2"><?php echo app('translator')->get('translation.Email_verification'); ?> 2</a></li>
                        <li><a href="auth-two-step-verification"
                                key="t-two-step-verification"><?php echo app('translator')->get('translation.Two_step_verification'); ?></a></li>
                        <li><a href="auth-two-step-verification-2"
                                key="t-two-step-verification-2"><?php echo app('translator')->get('translation.Two_step_verification'); ?> 2</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-components"><?php echo app('translator')->get('translation.Components'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span key="t-ui-elements"><?php echo app('translator')->get('translation.UI_Elements'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" key="t-alerts"><?php echo app('translator')->get('translation.Alerts'); ?></a></li>
                        <li><a href="ui-buttons" key="t-buttons"><?php echo app('translator')->get('translation.Buttons'); ?></a></li>
                        <li><a href="ui-cards" key="t-cards"><?php echo app('translator')->get('translation.Cards'); ?></a></li>
                        <li><a href="ui-carousel" key="t-carousel"><?php echo app('translator')->get('translation.Carousel'); ?></a></li>
                        <li><a href="ui-dropdowns" key="t-dropdowns"><?php echo app('translator')->get('translation.Dropdowns'); ?></a></li>
                        <li><a href="ui-grid" key="t-grid"><?php echo app('translator')->get('translation.Grid'); ?></a></li>
                        <li><a href="ui-images" key="t-images"><?php echo app('translator')->get('translation.Images'); ?></a></li>
                        <li><a href="ui-lightbox" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a></li>
                        <li><a href="ui-modals" key="t-modals"><?php echo app('translator')->get('translation.Modals'); ?></a></li>
                        <li><a href="ui-offcanvas" key="t-offcanvas"><?php echo app('translator')->get('translation.Offcanvas'); ?></a></li>
                        <li><a href="ui-rangeslider" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a></li>
                        <li><a href="ui-session-timeout" key="t-session-timeout"><?php echo app('translator')->get('translation.Session_Timeout'); ?></a></li>
                        <li><a href="ui-progressbars" key="t-progress-bars"><?php echo app('translator')->get('translation.Progress_Bars'); ?></a></li>
                        <li><a href="ui-placeholders" key="t-placeholders"><?php echo app('translator')->get('translation.Placeholders'); ?></a></li>
                        <li><a href="ui-sweet-alert" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a></li>
                        <li><a href="ui-tabs-accordions" key="t-tabs-accordions"><?php echo app('translator')->get('translation.Tabs_&_Accordions'); ?></a></li>
                        <li><a href="ui-typography" key="t-typography"><?php echo app('translator')->get('translation.Typography'); ?></a></li>
                        <li><a href="ui-toasts" key="t-toasts"><?php echo app('translator')->get('translation.Toasts'); ?></a></li>
                        <li><a href="ui-video" key="t-video"><?php echo app('translator')->get('translation.Video'); ?></a></li>
                        <li><a href="ui-general" key="t-general"><?php echo app('translator')->get('translation.General'); ?></a></li>
                        <li><a href="ui-colors" key="t-colors"><?php echo app('translator')->get('translation.Colors'); ?></a></li>
                        <li><a href="ui-rating" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a></li>
                        <li><a href="ui-notifications" key="t-notifications"><?php echo app('translator')->get('translation.Notifications'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge rounded-pill bg-danger float-end">10</span>
                        <span key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements" key="t-form-elements"><?php echo app('translator')->get('translation.Form_Elements'); ?></a></li>
                        <li><a href="form-layouts" key="t-form-layouts"><?php echo app('translator')->get('translation.Form_Layouts'); ?></a></li>
                        <li><a href="form-validation" key="t-form-validation"><?php echo app('translator')->get('translation.Form_Validation'); ?></a>
                        </li>
                        <li><a href="form-advanced" key="t-form-advanced"><?php echo app('translator')->get('translation.Form_Advanced'); ?></a></li>
                        <li><a href="form-editors" key="t-form-editors"><?php echo app('translator')->get('translation.Form_Editors'); ?></a></li>
                        <li><a href="form-uploads" key="t-form-upload"><?php echo app('translator')->get('translation.Form_File_Upload'); ?></a></li>
                        <li><a href="form-xeditable" key="t-form-xeditable"><?php echo app('translator')->get('translation.Form_Xeditable'); ?></a></li>
                        <li><a href="form-repeater" key="t-form-repeater"><?php echo app('translator')->get('translation.Form_Repeater'); ?></a></li>
                        <li><a href="form-wizard" key="t-form-wizard"><?php echo app('translator')->get('translation.Form_Wizard'); ?></a></li>
                        <li><a href="form-mask" key="t-form-mask"><?php echo app('translator')->get('translation.Form_Mask'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" key="t-basic-tables"><?php echo app('translator')->get('translation.Basic_Tables'); ?></a></li>
                        <li><a href="tables-datatable" key="t-data-tables"><?php echo app('translator')->get('translation.Data_Tables'); ?></a></li>
                        <li><a href="tables-responsive"
                                key="t-responsive-table"><?php echo app('translator')->get('translation.Responsive_Table'); ?></a></li>
                        <li><a href="tables-editable" key="t-editable-table"><?php echo app('translator')->get('translation.Editable_Table'); ?></a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span key="t-icons"><?php echo app('translator')->get('translation.Icons'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons" key="t-boxicons"><?php echo app('translator')->get('translation.Boxicons'); ?></a></li>
                        <li><a href="icons-materialdesign"
                                key="t-material-design"><?php echo app('translator')->get('translation.Material_Design'); ?></a></li>
                        <li><a href="icons-dripicons" key="t-dripicons"><?php echo app('translator')->get('translation.Dripicons'); ?></a></li>
                        <li><a href="icons-fontawesome" key="t-font-awesome"><?php echo app('translator')->get('translation.Font_awesome'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span key="t-maps"><?php echo app('translator')->get('translation.Maps'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google" key="t-g-maps"><?php echo app('translator')->get('translation.Google_Maps'); ?></a></li>

                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\xampp\htdocs\crm-edu\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
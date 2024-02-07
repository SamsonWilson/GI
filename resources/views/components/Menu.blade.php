<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assetsc/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Dashtreme</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" >
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                @can("manager")
                <li> <a href="{{ route('sadmin') }}"><i class="bx bx-home-alt"></i>Default</a>
                </li>
                @endcan
                @can("superadmin")


                <li> <a href="dashboard-eCommerce.html"><i class="bx bx-radio-circle"></i>eCommerce</a>
                </li>
                <li> <a href="dashboard-sales.html"><i class="bx bx-radio-circle"></i>Sales</a>
                </li>
                <li> <a href="dashboard-analytics.html"><i class="bx bx-radio-circle"></i>Analytics</a>
                </li>
                <li> <a href="dashboard-alternate.html"><i class="bx bx-radio-circle"></i>Alternate</a>
                </li>
                <li> <a href="dashboard-digital-marketing.html"><i class="bx bx-radio-circle"></i>Digital Marketing</a>
                </li>
                <li> <a href="dashboard-human-resources.html"><i class="bx bx-radio-circle"></i>Human Resources</a>
                </li>
                @endcan
            </ul>
        </li>



    </ul>
    <!--end navigation-->
</div>

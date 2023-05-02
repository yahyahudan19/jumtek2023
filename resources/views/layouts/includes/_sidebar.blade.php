<div class="deznav">
    <div class="deznav-scroll">
        {{-- <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ New Event</a> --}}
        <ul class="metismenu" id="menu">
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="event.html">Event</a></li>
                    <li><a href="event-detail.html">Event Detail</a></li>
                    <li><a href="customers.html">Customers</a></li>
                    <li><a href="analytics.html">Analytics</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
                </ul>
            </li> --}}
            @if(auth()->user()->role == 'Panitia')
            <li><a href="/dashboard" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="/dashboard/peserta" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-9"></i>
                    <span class="nav-text">Peserta</span>
                </a>
            </li>
            <li><a href="/dashboard/lomba" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-blueprint"></i>
                    <span class="nav-text">Lomba</span>
                </a>
            </li>
            <li><a href="/dashboard/profile" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-2"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
            @endif
            @if(auth()->user()->role == 'Peserta')
            <li><a href="/dashboard" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="/dashboard/profile" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-2"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
            @endif
        </ul>
        {{-- <div class="copyright">
            <p><strong>Jumtek <?php echo date("Y");?> Dashboard</strong> © <?php echo date("Y");?> All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by PMI Kab. Malang</p>
        </div> --}}
    </div>
</div>
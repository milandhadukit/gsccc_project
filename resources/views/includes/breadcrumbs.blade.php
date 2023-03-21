<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont-layout bg-c-blue"></i>
                <?php $segments = request()->segment(1);
                ?>
                <div class="d-inline">
                    <h4>{{ $segments }}</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>


                    <li class="breadcrumb-item"><a href="{{ URL('/dashboard') }}">dashboard

                    <?php $segments = request()->segment(1);
                    ?>
                    <li class="breadcrumb-item"><a href="{{ route('index.deshboard') }}">dashboard

                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ $segments }}">{{ request()->segment(1) }}
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ $segments }}">{{ request()->segment(2) }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- <div class="card borderless-card">
    <div class="card-block inverse-breadcrumb">
        <div class="breadcrumb-header">
            <h5><?php echo trans('menus.dashboard'); ?></h5>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="#!">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <?php $segments = request()->segment(1);
                ?>
                <li class="breadcrumb-item"><a href="{{ URL('/dashboard') }}">dashboard
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ $segments }}">{{ request()->segment(1) }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}

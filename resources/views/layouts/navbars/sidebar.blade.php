<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug ?? '' == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Inicio') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'icons') class="active " @endif>
                <a href="{{ route('productos.index') }}">
                    <i class="tim-icons icon-app"></i>
                    <p>{{ __('Productos') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('categorias.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Categorias') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>

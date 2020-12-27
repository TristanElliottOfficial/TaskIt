<div>
    <nav class="navigation">
        <div class="navigation-brand">
          <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div class="navigation-container">
            {{ $slot }}
        </div>
    </nav>
</div>

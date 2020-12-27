<div>
    <div x-data="dropdown()" class="auth-dropdown-container">
      <button x-on:click="open" class="auth-dropdown-button">
        <span class="button-text">{{ Auth::user()->name }}</span>
        <span class="button-indicator">
          <i class="fas fa-caret-down"></i>
        </span>
      </button>
      <div class="auth-dropdown-content" x-show.transition.in="isOpen()" x-on:click.away..transition.out="close">
        {{ $slot }}
      </div>
    </div>
</div>

<script type="text/javascript">
  function dropdown() {
      return {
          show: false,
          open() { this.show = true },
          close() { this.show = false },
          isOpen() { return this.show === true },
      }
  }
</script>

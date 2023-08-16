<div class="social-icons sm:flex sm:flex-col sm:justify-end">
  <ul class="flex justify-center" aria-label="Follow Me On Social Media">
    @foreach ($page->social as $title => $url)
      <li class="flex">
        <a class="inline-block social-link" href="{{ $url }}" target="_blank" rel="noopener noreferrer" aria-label="{{ ucwords($title) }}">
          @php($view = '_partials.svg.icon-' . $title)
          @include($view)
        </a>
      </li>
    @endforeach
  </ul>
</div>
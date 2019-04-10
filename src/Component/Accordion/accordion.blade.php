
<!-- accordion.blade.php -->
@if($list)
  <div class="{{ $class }}">
    @foreach($list as $section) 
      <section class="section" aria-labelledby="section-heading-{{ $loop->index }}">
        
        <h2 id="section-heading-{{ $loop->index }}">{{$section['heading']}}</h2>
        
        <div id="content-{{ $loop->index }}" class="content content-{{ $loop->index }}">
          {{ $section['content'] or 'Undefined content' }}
        </div>

      </section>
    @endforeach
  </div>
@else
  <!-- No accordion list data -->
@endif
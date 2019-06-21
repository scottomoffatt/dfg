@debug
@if($cat)
    @foreach($cat as $cat_item)
    <section class="hero is-large">
      <article class="hero-body">
        <div class="container">
          <figure>{!! $cat_item['thumbnail'] !!}</figure>
          <div class="column">
            <h1>{!! $cat_item['title'] !!}</h1>

            {!! $cat_item['content'] !!}
            </div>
        </div>
      </article>
    </section>
    @endforeach
    @else
        Not found
    @endif

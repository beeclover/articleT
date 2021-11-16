@foreach ($posts as $post)
  <div class="!card__s5 lg:after:hidden">
    @include('partials.card.template', [
      'title' => $post->post_title,
      'permalink' => $post->permalink,
      'thumbnail' => $post->thumbnail,
      'date' => $post->date,
      'excerpt' => $post->excerpt,
    ])
  </div>
@endforeach
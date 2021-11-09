<img
  @if (!empty($class))
      class="{{ $class }}"
  @endif
  src="{{ get_theme_file_uri('resources/images/'.$name.'.'.$ex) }}"
  @if ($ex !== 'svg')
  srcset="
    {{ get_theme_file_uri('resources/images/'.$name.'@2x.'.$ex) }} 2x,
    {{ get_theme_file_uri('resources/images/'.$name.'@3x.'.$ex) }} 3x,"
  @endif
  alt=""
>
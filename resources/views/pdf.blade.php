<style>
.page-break {
    page-break-after: always;
}
</style>

@foreach($items as $item)
  <h1>{{ $item->get_title() }}</h1>
  <h3>{{ $item->get_date() }}</h3>
  <a href="{{ $item->get_link() }}">Read Article</a>
  <div class="page-break"></div>
@endforeach

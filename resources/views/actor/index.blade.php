@extends('layouts.app')

@section('content')
<legend>
    Actors
    <a href="actor/create" class="btn btn-primary float-right" data-toggle="modal" data-target="#ajaxModal" title="Create Actor">Create actor</a>
</legend>
<div class="row">
  <div class="col">
    <div class="card overflow-auto" style="max-height: 640px;">
    <table class="table table-striped table-hover table-sm col">
      <thead>
        <tr>
          <th>Name</th>
          <th>First name</th>
          <th>Display name</th>
          <th>Company</th>
          <th>Person</th>
        </tr>
        <tr id="filterFields">
          <th><input class="form-control form-control-sm" name="Name" value="{{ Request::get('Name') }}"></th>
          <th colspan="3"></th>
          <th>
            <select id="person" class="custom-select-sm px-0" name="phy_person">
              <option value="" selected>All</option>
              <option value="1">Physical</option>
              <option value="0">Legal</option>
            </select>
          </th>
        </tr>
      </thead>
      <tbody id="actorList">
        @foreach ($actorslist as $actor)
        <tr class="reveal-hidden" data-id="{{ $actor->id }}">
          <td>
            <a href="/actor/{{ $actor->id }}" data-panel="ajaxPanel" title="Actor data">
              {{ $actor->name }}
            </a>
          </td>
          <td>{{ $actor->first_name }}</td>
          <td>{{ $actor->display_name }}</td>
          <td>{{ empty($actor->company) ? '' : $actor->company->name }}</td>
          <td>
            @if ($actor->phy_person)
            Physical
            @else
            Legal
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
  <div class="col-4">
    <div class="card border-info">
      <div class="card-header bg-info">
        Actor information
      </div>
      <div class="card-body p-2" id="ajaxPanel">
        <div class="alert alert-info" role="alert">
          Click on actor name to view and edit details
        </div>
      </div>
    </div>
    <span id="footerAlert" class="alert float-left"></span>
  </div>
</div>

@endsection

@section('script')
<script>

  var url = new URL(window.location.href);

  function refreshActorList() {
    window.history.pushState('', 'phpIP', url)
    reloadPart(url, 'actorList');
  }

  person.onchange = (e) => {
    if (e.target.value.length === 0) {
      url.searchParams.delete(e.target.name);
    } else {
      url.searchParams.set(e.target.name, e.target.value);
    }
    refreshActorList();
  }

  filterFields.addEventListener('input', debounce( e => {
    if (e.target.value.length === 0) {
      url.searchParams.delete(e.target.name);
    } else {
      url.searchParams.set(e.target.name, e.target.value);
    }
    refreshActorList();
  }, 300));

</script>
@stop

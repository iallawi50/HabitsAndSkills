<div class="card-footer d-flex text-muted">
    <span class="mt-auto mb-auto">
  {{ $habit->created_at->diffForHumans() }}
    </span>

<div class="d-flex text-danger mr-auto">
    <a href="/habits/{{ $habit->id }}" class="btn btn-primary ml-2 " type="submit">عرض</a>
    <a href="/habits/{{ $habit->id }}/edit" class="btn btn-success ml-2">تعديل</a>
    <button class="btn btn-danger" form="delete" type="submit">حذف</button>
</div>

    <form  class="" action="/habits/{{$habit->id}}" id="delete" method="post">
        @csrf 
        @method('DELETE')
        
    </form>

</div>
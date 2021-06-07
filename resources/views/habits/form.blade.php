@csrf

<div class="form-group">
    <h3>عنوان العادة / المهارة</h3>
    <input type="text" name="title" class="form-control p-4 mt-4" value="{{ $habit->title }}">
    @error('title')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

      <h4>مدى الحاجة لإكتساب/التخلص من العادة أو المهارة</h4>
      
      <div class="form-check form-check-inline">
          <input class="form-check-input ml-2" type="radio" name="important" {{ ($habit->important == 'مهم جدا') ? "checked" : '' }} id="important" value="مهم جدا">
          <label class="form-check-label" for="important">مهم جدا</label>
       
       
    <div class="form-check form-check-inline">
      <input class="form-check-input ml-2" type="radio" name="important" {{ ($habit->important == 'عادي الأهمية') ? "checked" : '' }}  id="noimportant" value="عادي الأهمية">
      <label class="form-check-label" for="noimportant">عادي الأهمية</label>

        </div>

  


  </div>
  @error('important')
  <div class="text-danger">{{ $message }}</div>
  @enderror
    <h4 class="mt-3">تأثير العادة أو المهارة سيكون على الجانب</h4>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="effect" id="effect1" {{ ($habit->effect == 'الروحي') ? "checked" : '' }} value="الروحي">
        <label class="form-check-label mr-2" for="effect1">الروحي</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="effect" id="effect2" {{ ($habit->effect == 'الصحي') ? "checked" : '' }} value="الصحي">
        <label class="form-check-label mr-2" for="effect2">الصحي</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="effect" id="effect3" {{ ($habit->effect == 'الاجتماعي') ? "checked" : '' }} value="الاجتماعي">
        <label class="form-check-label mr-2" for="effect3">الاجتماعي</label>
      </div>
    


    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="effect" id="effect4" {{ ($habit->effect == 'العلمي') ? "checked" : '' }} value="العلمي">
        <label class="form-check-label mr-2" for="effect4">العلمي</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="effect" id="effect5" {{ ($habit->effect == 'المهني') ? "checked" : '' }} value="المهني">
        <label class="form-check-label mr-2" for="effect5">المهني</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="effect" id="effect6" {{ ($habit->effect == 'المالي') ? "checked" : '' }} value="المالي">
        <label class="form-check-label mr-2" for="effect6">المالي</label>
      </div>

      @error('effect')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    



<div class="d-flex flex-row-reverse mt-4">

    <a href="/habits/{{$habit->id}}" class="btn btn-danger mr-2" type="submit">إلغاء</a>
    <button class="btn btn-success" type="submit">حفظ</button>
</div>
</form>


</div>
@extends('layouts.app ')


@section('content')
<div class="text-right">
    
    
    
    <div class="card mx-auto text-white bg-primary mb-3">
        <div class="card-header text-center">مقدمة</div>
        <div class="card-body">
            <p class="card-text">

                بعد البحث وجدنا أن سر اكتساب العادات والمهارات يرتكز على أربعة أمور ,

                <ul>
                    <li>أولاً : إدراك أهمية اكتساب العادة أو المهارة للشخص وسبب رغبته في اكتسابها وفهم تأثيرها على حياته سيكون تأثيرها كلما ازداد حرصه على اكتسابها</li>
                    <li>ثانياً : تهيئة البيئة المناسبة لاكتساب العادة/المهارة وذلك لتخفيض مقاومة العقل للتغير وتهيئته لتقبل تعلم العادة/المهارة الجديدة</li>
                    <li>ثالثاً : تحديد مدة ممارسة العادة/المهارة والمواظبة على أداء العمل خلال تلك المدة حتى يصبح عادة/مهارة تلقائية يؤديها الشخص دون بذل جهد كبيرأو شعور بالضجر</li>
                    <li>رابعاً : وجود حوافز كتشجيع الأسرة أو الرغبة في الحصول على مكافئة معينة</li>
                </ul>
            </p>
        </div>
    </div>


    <div class="card text-white bg-danger mb-3">
        <div class="card-header text-center">الهدف</div>
        <div class="card-body">
            <p class="card-text">هذه الموقع سيساعدك على المواظبة على أداة العمل المطلوب لمدة 40 يوماً حتى تكتسب العادة\المهارة المطلوبة</p>
            <p class="card-text"> وفي العشرة أيام الاخيرة من الأربعين يجب عليك أن تجبر نفسك على القيام بأداة العمل مهما كانت الظروف</p>
            <p class="card-text">فهكذا تتحدى نفسك وتجبر عقلك على تقبّل التغيير</p>
            <p class="card-text">وإن لم تنجح في الأربعين الاولى فقم بتكرار الأربعين مجدداً وسوف تلاحظ أن مقاومة عقلك أو نفسك في الأربعين الثانية ستكون أقل من الاربعين الاولى</p>
        </div>
    </div>
    
    <div class="card text-white bg-dark mb-3">
        <div class="card-header text-light text-center">برمجة وتصميم</div>
        <div class="card-body">
            <h5 class="card-title text-center">علي العبدالله</h5>
            <p class="card-text text-info text-center" dir="ltr">
                <a class="text-info" target="_blank" href="https://instagram.com/iallawi50/"> <small>@iallawi50</small></a>
                |    
                <a class="text-info" target="_blank" href="https://instagram.com/Cast.Media/"> <small>@Cast.Media</small></a>
                |    
                <a class="text-info" target="_blank" href="https://instagram.com/iMartenDev/"> <small>@iMartenDev</small></a>  
            </p>
            <p class="card-text text-success text-center" dir="ltr">
            <a class="text-success" target="_blank" href="https://wa.me/966565595718">+966 565595718</a>
            </p>
        </div>
    </div>

    @guest
        
    
    <div class="d-flex d-flex-inline justify-content-center">
        
        
        <div class="form-group ml-4 btn-group btn-group-lg">
            <a class="btn btn-success text-font rounded-0" href="/register">تسجيل دخول</a>
        </div>
        
        <div class="form-group ml-4 btn-group-lg">
            <a class="btn btn-success text-font rounded-0" href="/register">تسجيل جديد</a>
        </div>
        
    </div>
    
    
    @endguest



</div>
    
    
    @endsection
@extends('blog.layouts.app')
@section('content')
    <div class="flex-1 p-3 md:py-[35]">
      <div class="space-y-2 md:space-y-6">
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body">
            <h1 class="text-3xl text-center font-extrabold">Noticias Puerto Plata</h1>
          </div>
        </div>
        <div class="card bg-base-200 shadow-xl">
          <div class="card-body">
            <article class="prose max-w-none">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Malesuada fames ac turpis egestas integer eget
                aliquet nibh. Et tortor at risus viverra adipiscing at in
                tellus integer. In nisl nisi scelerisque eu ultrices vitae
                auctor eu. Sit amet est placerat in egestas erat imperdiet
                sed. Amet justo donec enim diam vulputate. Commodo quis
                imperdiet massa tincidunt nunc pulvinar. Id diam maecenas
                ultricies mi eget mauris pharetra. Diam vel quam elementum
                pulvinar etiam non. Accumsan tortor posuere ac ut consequat
                semper viverra. Id aliquet risus feugiat in ante metus
                dictum.
              </p>

              <p>
                Viverra vitae congue eu consequat ac felis donec et odio.
                Cursus sit amet dictum sit amet. Eget sit amet tellus cras
                adipiscing enim eu turpis. Nibh ipsum consequat nisl vel
                pretium lectus. Urna et pharetra pharetra massa massa
                ultricies mi. Cras sed felis eget velit aliquet. Urna id
                volutpat lacus laoreet non curabitur gravida arcu. Est
                placerat in egestas erat imperdiet sed euismod. Viverra
                maecenas accumsan lacus vel. Nisi lacus sed viverra tellus.
                Ullamcorper malesuada proin libero nunc consequat interdum
                varius. Vestibulum lectus mauris ultrices eros. Nunc aliquet
                bibendum enim facilisis gravida neque. Blandit libero
                volutpat sed cras ornare arcu. Sed tempus urna et pharetra
                pharetra massa.
              </p>

              <p>
                Fames ac turpis egestas integer eget. Massa ultricies mi
                quis hendrerit dolor. Et ultrices neque ornare aenean
                euismod. Nunc sed blandit libero volutpat sed cras ornare
                arcu dui. Ac ut consequat semper viverra nam. Quis blandit
                turpis cursus in hac. Risus at ultrices mi tempus imperdiet
                nulla. Velit sed ullamcorper morbi tincidunt ornare massa
                eget. Eleifend quam adipiscing vitae proin. Orci sagittis eu
                volutpat odio facilisis mauris sit. Accumsan sit amet nulla
                facilisi morbi tempus iaculis. Cras fermentum odio eu
                feugiat pretium. Cum sociis natoque penatibus et magnis dis
                parturient montes nascetur. Mauris pellentesque pulvinar
                pellentesque habitant morbi tristique.
              </p>

              <p>
                Nunc faucibus a pellentesque sit amet porttitor eget dolor
                morbi. Tellus elementum sagittis vitae et leo duis ut diam
                quam. Montes nascetur ridiculus mus mauris vitae ultricies
                leo integer malesuada. Vivamus at augue eget arcu dictum
                varius. Consequat semper viverra nam libero. Hendrerit dolor
                magna eget est. Facilisis gravida neque convallis a cras
                semper auctor. Habitant morbi tristique senectus et netus.
                Consectetur libero id faucibus nisl tincidunt eget nullam
                non. Cursus risus at ultrices mi tempus. Egestas tellus
                rutrum tellus pellentesque eu tincidunt tortor aliquam
                nulla. Non odio euismod lacinia at. Rhoncus aenean vel elit
                scelerisque mauris pellentesque pulvinar pellentesque.
              </p>

              <p>
                Iaculis nunc sed augue lacus viverra vitae congue eu
                consequat. Quis enim lobortis scelerisque fermentum dui
                faucibus. Dictum at tempor commodo ullamcorper a lacus
                vestibulum. Lectus mauris ultrices eros in cursus turpis
                massa tincidunt. Praesent tristique magna sit amet purus.
                Aliquam eleifend mi in nulla. Id diam vel quam elementum
                pulvinar etiam non. Sodales neque sodales ut etiam sit amet
                nisl purus. Dictum varius duis at consectetur. Eget felis
                eget nunc lobortis.
              </p>
            </article>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <p class="text-sm pl-4">Copyright © {{ date('Y') }} {{ config('app.name') }}</p>
    </div>
  </div>
</div>
@endsection
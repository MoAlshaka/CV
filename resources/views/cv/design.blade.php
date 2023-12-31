<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Professional CV</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Ruwudu&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}" />
    <link rel="stylesheet" href="{{asset('css/design1.css')}}" />
    <script src="{{asset('js/jspdf.umd.min.js')}}"></script>
  </head>
  <body>
    @if(isset($date))
        <!-- اترك الكلاسات كما هيا وضع القيم بداخل التج بدون تعديل -->
        {{-- <div class="cv-container">
            <div class="mb-4 grid gap-4 border-b pb-4">
                <div class="flex items-center gap-4">
                <div class="grid flex-1 gap-1">
                    <!-- صاحب السي في -->
                    <h1 class="cv-name">{{ $date['name'] }}</h1>
                    <div class="mt-2 grid gap-2">
                    <div class="inline-flex items-center gap-1 text-xs">
                        <i class="fas fa-map-marker-alt"></i>
                        <!-- العنوان -->
                        <span>{{ $date['address'] }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="inline-flex items-center gap-1 text-xs">
                        <i class="fas fa-birthday-cake"></i>
                        <!-- الميلاد -->
                        <span>{{ $date['date'] }}</span>
                        </div>
                        <div class="inline-flex items-center gap-1 text-xs">
                        <i class="fas fa-phone-alt"></i>
                        <!-- رقم الهاتف -->
                        <span>{{ $date['phone'] }}</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="markdown">
                <!-- نبذه -->
                <p>
                    {{ $date['comment'] }}
                </p>
                </div>
            </div>
            <div>
                <div>
                <section>
                    <h4
                    class="mb-2 font-bold uppercase"
                    style="color: rgb(63, 81, 181)"
                    >
                    Work Experience
                    </h4>
                    <div
                    class="grid items-start gap-4"
                    style="grid-template-columns: repeat(1, minmax(0px, 1fr))"
                    >
                    <?php  $i=0; ?>
                    @foreach ($date['companyName'] as $company)
                        <div class="grid gap-1">
                            <div class="flex items-start justify-between">
                                <div class="flex flex-col">
                                    <!-- اسم الشركة -->
                                    <span class="font-semibold">{{ $company }}</span>
                                    <!-- المسمي الوظيفي -->
                                    <span class="opacity-75">{{ $date['position'][$i] }}</span>
                                </div>
                                <div class="flex flex-col gap-1 text-right text-xs">
                                    <!-- تاريخ العمل -->
                                    <div class="opacity-50">
                                        ({{ $date['startDate'][$i] }} - {{ $date['endDate'][$i] }})
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  $i++ ?>
                    @endforeach

                </section>
                <section>
                    <h4 class="mb-2 font-bold uppercase" style="color: #3f51b5">
                    Education
                    </h4>
                    <div
                    class="grid items-start gap-4"
                    style="grid-template-columns: repeat(1, minmax(0px, 1fr))"
                    >
                    <div class="grid gap-1">
                        <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <!-- اسم المدرسة -->
                            <span class="font-semibold"
                            >{{ $date['institution'] }}
                            </span>
                            <!-- التخصص -->
                            <span class="opacity-75"
                            >{{ $date['areaOfStudy'] }}</span
                            >
                        </div>
                        <div class="flex flex-col gap-1 text-right text-xs">
                            <!-- تاريخ التعليم -->
                            <div class="opacity-50">
                            ({{ $date['startEducationDate'] }} - {{ $date['endEducationDate'] }})
                            </div>
                            <span class="opacity-75">{{ $date['grade'] }}</span>
                        </div>
                        </div>
                        <div></div>
                    </div>
                    </div>
                </section>
                </div>
                <div>
                <section>
                    <h4
                    class="mb-2 font-bold uppercase"
                    style="color: rgb(63, 81, 181)"
                    >
                    Skills
                    </h4>
                    <div
                    class="grid items-start gap-4"
                    style="grid-template-columns: repeat(1, minmax(0px, 1fr))"
                    >
                    @foreach ($date['skill'] as $skill)
                        <div class="grid gap-1">
                            <div class="flex items-start justify-between">
                            <div class="flex flex-col">
                                <span class="font-semibold">{{ $skill }}</span>
                            </div>
                            <div class="flex flex-col gap-1 text-right text-xs"></div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </section>
                <section>
                    <h4
                    class="mb-2 font-bold uppercase"
                    style="color: rgb(63, 81, 181)"
                    >
                    Languages
                    </h4>
                    <div
                    class="grid items-start gap-4"
                    style="grid-template-columns: repeat(2, minmax(0px, 1fr))"
                    >
                    <?php  $j=0; ?>
                    @foreach ($date['langName'] as $language )
                        <div class="grid gap-1">
                            <div class="flex items-start justify-between">
                            <div class="flex flex-col">
                                <span class="font-semibold">{{ $language }}</span>
                            </div>
                            <div class="flex flex-col gap-1 text-right text-xs"></div>
                            </div>
                            <div class="grid gap-1">
                            <span class="opacity-75">{{ $date['langLvl'][$j] }}</span>
                            </div>
                        </div>
                        <?php  $j++ ?>
                    @endforeach
                    </div>
                </section>
                <section>
                    <h4
                    class="mb-2 font-bold uppercase"
                    style="color: rgb(63, 81, 181)"
                    >
                    Military situation
                    </h4>
                    <div
                    class="grid items-start gap-4"
                    style="grid-template-columns: repeat(1, minmax(0px, 1fr))"
                    >
                    <div class="grid gap-1">
                        <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <span class="font-semibold">{{ $date['militaryStatus'] }}</span>
                        </div>
                        <div class="flex flex-col gap-1 text-right text-xs"></div>
                        </div>
                        <div></div>
                    </div>
                    </div>
                </section>
                <section>
                    <h4
                    class="mb-2 font-bold uppercase"
                    style="color: rgb(63, 81, 181)"
                    >
                    marital status
                    </h4>
                    <div
                    class="grid items-start gap-4"
                    style="grid-template-columns: repeat(2, minmax(0px, 1fr))"
                    >
                    <div class="grid gap-1">
                        <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <span class="font-semibold">{{ $date['martialStatus'] }}</span>
                        </div>
                        <div class="flex flex-col gap-1 text-right text-xs"></div>
                        </div>
                        <div></div>
                    </div>
                    </div>
                </section>
                <section>
                    <h4
                    class="mb-2 font-bold uppercase"
                    style="color: rgb(63, 81, 181)"
                    >
                    Nationality
                    </h4>
                    <div
                    class="grid items-start gap-4"
                    style="grid-template-columns: repeat(2, minmax(0px, 1fr))"
                    >
                    <div class="grid gap-1">
                        <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <span class="font-semibold">{{ $date['nationality'] }}</span>
                        </div>
                        <div class="flex flex-col gap-1 text-right text-xs"></div>
                        </div>
                        <div></div>
                    </div>
                    </div>
                </section>
                </div>
            </div>
        </div> --}}
        @include('layout.cv')
    @endif
    <a href="{{ route('downloadPageAsPDF') }}" class="btn btn-primary">Download PDF</a>
</body>
</html>


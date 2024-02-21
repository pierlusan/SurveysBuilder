<x-app-layout>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"  href="{{ asset('vendor/lp/surveys/survey.css') }}">

    <style>
        .colored-bar {
            background-color: #8f00ff;
            height: 5px;
            margin-left: -12px;
            margin-right: -12px;
            margin-top: -7.8px;
            margin-bottom: 10px;
        }
        .mio-colore-personalizzato {
            background-color: #e6e6fa;
        }
        .colore-bottone {
            background-color: #a84bff;
        }
        .opacity-background {
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>

</head>
<body>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card opacity-background mio-colore-personalizzato">
            <div class="container">
                <form action="{{route('surveys.storeModule',['survey'=>$survey->id])}}" method="post">
                    @csrf
                    <div class="card-header bg-white rounded-3 mt-5">
                        <div class="rounded-5 colored-bar"></div>
                        {{__('message.create new module')}}
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="title" class="block text-black-100">{{__('message.title')}}<span class="font-bold text-base text-red-600">*</span></label>
                        <input name="titolo" id="titolo" class="form-control" type="text" placeholder="{{__('message.title')}}" aria-label="default input example" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-black-100">{{__('message.description')}}<span class="font-bold text-base text-red-600">*</span></label>
                        <input name="descrizione" id="descrizione" class="form-control" type="text" placeholder="{{__('message.description')}}" aria-label="default input example" required>
                    </div>
                    <button type="submit" class="btn colore-bottone rounded-5 float-end mt-auto mb-2">{{__('message.next')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</x-app-layout>


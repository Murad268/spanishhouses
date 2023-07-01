<div class="page__inputs page__inputs__LOP">
    <form method="POST" action="{{ Request::routeIs('resale') ? route('resale') : (Request::routeIs('onrent') ? route('onrent') : (Request::routeIs('onebuilding') ? route('onebuilding', ['id'=>$id]) : route('resale'))) }}"
>
    @csrf
    <input type="hidden" name="build_type" class="build_type">
        <input type="hidden" name="district_type" class="district_type">
        <div class="artikul">
            <div class="search__icon">
                <img src="{{asset('assets/FRONT/icons/pages__inputs/searching-magnifying-glass 1.svg')}}" alt="">
            </div>
            <input name="artikul" placeholder="Артикул" type="text">
        </div>
        <div class="type__building type__building__street">
            <div class="type__building__main type__building__street__main">
                <span class="main">Тип недвижимости</span>
                <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </div>
            <div style="width: 100.4%;" class="type__building__bottom type__building__bottom__type">
                <ul>
                    <li data-type="" style="cursor: pointer">Все типы</li>
                    @foreach($types as $type)
                    <li data-type='{{$type->id}}' style="cursor: pointer">{{$type->title}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="type__building typpage__inputs__box">
            <div class="type__building__main typpage__inputs__box__main">
                <span class="main">Район</span>
                <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </div>
            <div class="type__building__bottom type__building__bottom__dis">
                <ul>
                    <li style="cursor: pointer" data-type="">Все типы</li>
                    @foreach($districts as $district)
                    <li data-type='{{$district->id}}' style="cursor: pointer">{{$district->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <button>поиск</button>
    </form>
</div>
<script>
    document.querySelectorAll('.type__building__bottom__type li').forEach(element => {
        element.addEventListener('click', (e) => {
            document.querySelector('.type__building__street__main .main').textContent = e.target.textContent
            document.querySelector('.build_type').value = e.target.getAttribute('data-type')
        })
    })

    document.querySelectorAll('.type__building__bottom__dis li').forEach(element => {
        element.addEventListener('click', (e) => {
            document.querySelector('.typpage__inputs__box__main .main').textContent = e.target.textContent
            document.querySelector('.district_type').value = e.target.getAttribute('data-type')
        })
    })
</script>

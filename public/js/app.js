function add() {
    let form = document.createElement('form');
    form.action = '';
    form.method = 'POST';

    form.innerHTML = '<li><form name="receipt" method="POST" action="/receipt"><select name="product" id="product"> @foreach ($products as $item) <option value="{{$item->id}}"> {{$item->name}}</option> @endforeach </select><input type="number" name="price" id="price"><input type="number" name="count" id="count"><input type="checkbox" name="sale" id="sale"><label for="sale">Со скидкой</label></li>'

    document.body.getElementsByClassName('List').appendChild(form);
    console.log('Форма создана с именем' + 'form1');
}

function submit(){
    form.submit()

}

function remove() {

}
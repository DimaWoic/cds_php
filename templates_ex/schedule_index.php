<?php

include_once('base/base.html')

?>



<p class="mt-2">Расстановка подвижного состава по часам суток</p>

<table class="table table-striped table-bordered mt-4">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Транспорт</th>
      <th scope="col">Депо</th>
      <th scope="col">Маршрут</th>
      <th scope="col">День графика</th>
      <th scope="col">Час суток</th>
      <th scope="col">Количество вагонов(машин)</th>
      <th scope="col">Начальная дата</th>
      <th scope="col">Конечная дата</th>
      <th scope="col">Час суток</th>
    </tr>
  </thead>
  <tbody>
  {% if rs %}
        {% for f in rs %}
    <tr>
        <td>{{ f.transport }}</td>
        <td>{{ f.depot }}</td>
        <td>{{ f.route }}</td>
        <td>{{ f.graphic }}</td>
        <td>{{ f.start_hour_of_day }}</td>
        <td>{{ f.num_car }}</td>
        <td>{{ f.start_data }}</td>
        <td>{{ f.end_data }}</td>
        <td>{{ f.end_hour_of_day }}</td>
    </tr>



  
  </tbody>
</table>

<a class="btn btn-primary float-right" href="{% url 'rollingstock_add' %}" role="button">Редактировать</a>



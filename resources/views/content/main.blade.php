@extends('layouts.app')

@section('main-content')
    <div class="mdl-grid ">
        <div class="mdl-cell mdl-cell--6-col">
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Material</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                    <td>25</td>
                    <td>$2.90</td>
                </tr>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                    <td>50</td>
                    <td>$1.25</td>
                </tr>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                    <td>10</td>
                    <td>$2.35</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mdl-cell mdl-cell--6-col">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Material</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                    <td>25</td>
                    <td>$2.90</td>
                </tr>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                    <td>50</td>
                    <td>$1.25</td>
                </tr>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                    <td>10</td>
                    <td>$2.35</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="mdl-cell mdl-cell--12-col">
            <hr />
        </div>
        <div class="mdl-cell mdl-cell--12-col">
            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
        </div>

        <div class="mdl-cell mdl-cell--3-col">
            <!-- Deletable Chip -->
            <span class="mdl-chip">
                <span class="mdl-chip__text">Basic Chip</span>
            </span>
        </div>
        <div class="mdl-cell mdl-cell--3-col">
            <!-- Deletable Chip -->
            <span class="mdl-chip mdl-chip--deletable">
                <span class="mdl-chip__text">Deletable Chip</span>
                <button type="button" class="mdl-chip__action"><i class="material-icons">cancel</i></button>
            </span>
        </div>
        <div class="mdl-cell mdl-cell--3-col">
            <!-- Contact Chip -->
            <span class="mdl-chip mdl-chip--contact">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">A</span>
                <span class="mdl-chip__text">Contact Chip</span>
            </span>
        </div>
        <div class="mdl-cell mdl-cell--3-col">
            <!-- Deletable Contact Chip -->
            <span class="mdl-chip mdl-chip--contact mdl-chip--deletable">
                <img class="mdl-chip__contact" src="/images/user.jpg">
                <span class="mdl-chip__text">Deletable Contact Chip</span>
                <a href="#" class="mdl-chip__action"><i class="material-icons">cancel</i></a>
            </span>
        </div>
        </div>
@endsection

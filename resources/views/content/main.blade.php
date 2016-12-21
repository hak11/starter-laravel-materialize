@extends('layouts.app')

@section('main-content')
    <div class="mdl-grid ">
        <div class="mdl-cell mdl-cell--6-col">
            <div class="starter-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                    <h2 class="mdl-card__title-text">Updates</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    Non dolore elit adipisicing ea reprehenderit consectetur culpa.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">Read More<span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 231.938px; height: 231.938px; transform: translate(-50%, -50%) translate(109px, 4px);"></span></span></a>
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--6-col">
            <div class="starter-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                    <h3>View options</h3>
                    <ul>
                        <li>
                            <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" data-upgraded=",MaterialCheckbox,MaterialRipple">
                                <input type="checkbox" id="chkbox1" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Click per object</span>
                                <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                        </li>
                        <li>
                            <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" data-upgraded=",MaterialCheckbox,MaterialRipple">
                                <input type="checkbox" id="chkbox2" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Views per object</span>
                                <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                        </li>
                        <li>
                            <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" data-upgraded=",MaterialCheckbox,MaterialRipple">
                                <input type="checkbox" id="chkbox3" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Objects selected</span>
                                <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                        </li>
                        <li>
                            <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" data-upgraded=",MaterialCheckbox,MaterialRipple">
                                <input type="checkbox" id="chkbox4" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Objects viewed</span>
                                <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                        </li>
                    </ul>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50" data-upgraded=",MaterialButton,MaterialRipple">Change location<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    <div class="mdl-layout-spacer"></div>
                    <i class="material-icons">location_on</i>
                </div>
            </div>
        </div>
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
        <div class="mdl-cell mdl-cell--6-col">
            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
        </div>
        <div class="mdl-cell mdl-cell--6-col">
            <div class="mdl-cell mdl-cell-3-col">
                <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button>
                <dialog class="mdl-dialog">
                    <h4 class="mdl-dialog__title">Allow data collection?</h4>
                    <div class="mdl-dialog__content">
                        <p>
                            Allowing us to collect data will let us get you the information you want faster.
                        </p>
                    </div>
                    <div class="mdl-dialog__actions">
                        <button type="button" class="mdl-button">Agree</button>
                        <button type="button" class="mdl-button close">Disagree</button>
                    </div>
                </dialog>
                <script>
                    var dialog = document.querySelector('dialog');
                    var showDialogButton = document.querySelector('#show-dialog');
                    if (! dialog.showModal) {
                        dialogPolyfill.registerDialog(dialog);
                    }
                    showDialogButton.addEventListener('click', function() {
                        dialog.showModal();
                    });
                    dialog.querySelector('.close').addEventListener('click', function() {
                        dialog.close();
                    });
                </script>
            </div>
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
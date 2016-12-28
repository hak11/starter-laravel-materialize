@extends('layouts.app')

@section('main-content')
<div class="mdl-grid">
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
</div>
@endsection

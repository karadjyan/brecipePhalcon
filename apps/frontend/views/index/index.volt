{% extends "layouts/layout.volt" %}

{% block styles %}{% endblock %}

{% block content %}
    <div class="row">
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ recipes }}</h3>

                    <p>Recipes</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="{{ url('recipe/') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ ingredients }}</h3>

                    <p>Ingredients</p>
                </div>
                <div class="icon">
                    <i class="fa fa-puzzle-piece"></i>
                </div>
                <a href="{{ url('ingredient/') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ menus }}</h3>

                    <p>Menus</p>
                </div>
                <div class="icon">
                    <i class="fa fa-map"></i>
                </div>
                <a href="{{ url('menu/') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
{% endblock %}

{% block  scripts %}{% endblock %}
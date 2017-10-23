@extends('layouts.app')
@section('title')
 GATE CS
@endsection
@section('stylesheet')
 <link rel="stylesheet" href="css/gate.css">
@endsection
@section('content')
<section class="section section-work">
<h3 id="gate">GATE CSE</h3>
	<div class="work-belt">
		<div class="thumb-wrap">
			<div class="thumb-container">
				<div class="thumb-unit" data-folder="gate-1" style="background-image: url(../images/gate1.jpg);">
					<div class="thumb-overlay">
						<strong>GATE EXAM DETAILS</strong>
						<div class="zoom-icon"></div>
					</div>
				</div>
				<div class="thumb-unit"  data-folder="gate-2" style="background-image: url(../images/gate-2222.jpg);">
					<div class="thumb-overlay">
						<strong>GATE ELIGIBILITY</strong>
						<div class="zoom-icon"></div>
					</div>
				</div>
				<div class="thumb-unit" data-folder="gate-3" style="background-image: url(../images/gate-3.jpg);">
					<div class="thumb-overlay">
						<strong>HOW TO APPLY GATE???</strong>
						<div class="zoom-icon"></div>
					</div>
				</div>
				<div class="thumb-unit" data-folder="gate-4" style="background-image: url(../images/gate-22.jpg);">
					<div class="thumb-overlay">
						<strong>GATE CSE PAPER</strong>
						<div class="zoom-icon"></div>
					</div>
				</div>
				<div class="thumb-unit" data-folder="gate-5" style="background-image: url(../images/gate-5.jpg);">
					<div class="thumb-overlay">
						<strong>GATE CSE SYLLABUS</strong>
						<div class="zoom-icon"></div>
					</div>
				</div>
				<a href="http://gatecse.in/previous-year-gate-papers-and-official-keys/"><div class="thumb-unit"  style="background-image: url(../images/gate-222.png);">
					<div class="thumb-overlay">
						<strong>PREVIOUS YEAR QUESTIONS</strong>
						<div class="zoom-icon"></div>
					</div>

				</div>
				</a>
				<div class="thumb-unit" data-folder="gate-7" style="background-image: url(../images/gate-9.jpg);">
					<div class="thumb-overlay">
						<strong>GATE CSE ANALYSIS</strong>
						<div class="zoom-icon"></div>
					</div>
				</div>
				{{--<div class="thumb-unit" data-folder="gate-8" style="background-image: url(../images/gate-8.png);">--}}
					{{--<div class="thumb-overlay">--}}
						{{--<strong>GATE</strong>--}}
						{{--<div class="zoom-icon"></div>--}}
					{{--</div>--}}
				{{--</div>--}}
			</div>
		</div>

		<div class="work-wrap">
			<div class="work-container">
				<div class="work-return">
					@include('gate.back')
				</div>
				    <div class="project-load"></div>
			</div>
		</div>
	</div>
</section>
<script src="js/gate.js"></script>
@endsection

@extends('layouts.app')

@section('content')
<b-container fluid style="height: calc(100vh - 104px);">
    <b-row no-gutters>
        <b-col cols="12" md="3">
            <!-- Contacts -->
            <contact-list-component></contact-list-component>
        </b-col>

        <b-col cols="9">
            <active-conversation-component></active-conversation-component>
        </b-col>
    </b-row>
</b-container>
@endsection

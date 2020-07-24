@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row row-deck">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">{{ t('Подтверждение Электронной Почты') }}</h3>
                    </div>
                    <div class="block-content">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ t('На ваш адрес электронной почты была отправлена новая ссылка для подтверждения.') }}
                            </div>
                        @endif
                        {{ t('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения почты.') }}
                            <br> <br>
                        {{ t('Если вы не получили письмо') }}
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ t('нажмите здесь, чтобы запросить другое.') }}</button>
                            </form>
                            <br> <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

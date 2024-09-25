@extends('layouts.app')
@section('title', 'Login')

@section('style')
    <link href="{{ asset('../public/css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="login-container">
            <div class="title">Login</div>
            <img src="images/logo.jpg" alt="Logo" class="logo">
            <form>
                <div class="input-group">
                    <label>
                        <input type="text" placeholder="Username">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                            </svg>
                        </span>
                    </label>
                </div>
                <div class="input-group">
                    <label>
                        <input type="password" placeholder="Password">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                                fill="#888">
                                <path
                                    d="M263.72-96Q234-96 213-117.15T192-168v-384q0-29.7 21.15-50.85Q234.3-624 264-624h24v-96q0-79.68 56.23-135.84 56.22-56.16 136-56.16Q560-912 616-855.84q56 56.16 56 135.84v96h24q29.7 0 50.85 21.15Q768-581.7 768-552v384q0 29.7-21.16 50.85Q725.68-96 695.96-96H263.72Zm.28-72h432v-384H264v384Zm216.21-120Q510-288 531-309.21t21-51Q552-390 530.79-411t-51-21Q450-432 429-410.79t-21 51Q408-330 429.21-309t51 21ZM360-624h240v-96q0-50-35-85t-85-35q-50 0-85 35t-35 85v96Zm-96 456v-384 384Z" />
                            </svg>
                        </span>
                    </label>
                </div>
                <button type="submit" class="login-button">Login
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#fff">
                            <path d="M630-444H192v-72h438L429-717l51-51 288 288-288 288-51-51 201-201Z" />
                        </svg>
                    </span>
                </button>
                <p class="footer-text">Don't have an account? <a href="#">Contact Us</a></p>
            </form>
        </div>
        <div class="img-container">
            <p class="banner-text">よろ<br>こそ<br>日本語</p>
        </div>
    </div>
@endsection

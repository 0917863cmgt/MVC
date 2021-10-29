@extends('components.layout')
@section('content')
    <body id="register">
        <section id="register-section" class="container-fluid">
            <div class="row register-header">
                <div class="col">
                </div>
                <div class="col">
                    <h1 style="text-align: center">Register</h1>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col">
                </div>
                <div class="col p-5 grey" style="border-radius:20px">
                    <form class="register-form" id="register-create" method="POST" action="/register">
                        @csrf
                        <input type="hidden" name="role" id="role" value="1" required>

                        <label class="register-label" for="first_name">Voornaam</label>
                        <input class="register-input-text" type="text" name="first_name" id="first_name" required>

                        <label class="register-label" for="middle_name">Middelnaam</label>
                        <input class="register-input-text" type="text" name="middle_name" id="middle_name">

                        <label class="register-label" for="prefix">Tussenvoegsel</label>
                        <input class="register-input-text" type="text" name="prefix" id="prefix">

                        <label class="register-label" for="last_name">Achternaam</label>
                        <input class="register-input-text" type="text" name="last_name" id="last_name" required>

                        <label class="register-label" for="email">E-mail</label>
                        <input class="register-input-email" type="email" name="email" id="email" required>

                        <label class="register-label" for="confirm_email">Bevestig E-mail</label>
                        <input class="register-input-email" type="email" name="email_confirmation" id="email_confirmation" required>

                        <label class="register-label" for="password">Wachtwoord</label>
                        <input class="register-input-password" type="password" name="password" id="password" required>

                        <label class="register-label" for="confirm_password">Bevestig wachtwoord</label>
                        <input class="register-input-password" type="password" name="password_confirmation" id="password_confirmation" required>

                        <label class="register-label" for="gender">Geslacht</label>
                        <select class="register-select-gender" name="gender" id="gender" required>
                            <option value="Male">Man</option>
                            <option value="Male">Vrouw</option>
                            <option value="Other">Anders</option>
                        </select>

                        <label class="register-label" for="birthdate">Geboortedatum</label>
                        <input class="register-input-text" type="text" name="birthdate" id="birthdate" required>

                        <label class="register-label" for="street_name">Straatnaam</label>
                        <input class="register-input-text" type="text" name="street_name" id="street_name" required>

                        <label class="register-label" for="house_number_and_extension">Huisnummer en toevoeging</label>
                        <input class="register-input-text" type="text" name="house_number_and_extension" id="house_number_and_extension" required>

                        <label class="register-label" for="postal_code">Postcode</label>
                        <input class="register-input-text" type="text" name="postal_code" id="postal_code" required>

                        <label class="register-label" for="city">Stad</label>
                        <input class="register-input-text" type="text" name="city" id="city" required>

                        <label class="register-label" for="country">Land</label>
                        <input class="register-input-text" type="text" name="country" id="country" required>

                        <label class="register-label" for="phone_number">Telefoonnummer</label>
                        <input class="register-input-text" type="text" name="phone_number" id="phone_number" required>

                        <label class="register-label" for="profile_image">Profiel foto</label>
                        <input class="register-input-file" type="file" name="profile_image" id="profile_image" >

                        <label class="register-label" for="background_image">Achtergrond foto</label>
                        <input class="register-input-file" type="file" name="background_image" id="background_image" >

                        <label class="register-label" for="bio">Bio</label>
                        <input class="register-input-text" type="text" name="bio" id="bio" >

                        <input class="register-input-submit" type="submit" name="submit" id="submit" value="Registreer">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
                <div class="col">
                </div>
            </div>
        </section>
    </body>
@endsection

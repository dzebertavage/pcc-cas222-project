<div id="form-container">

    <h3>Registration Form</h3>
    <p>Register with Ace in the Hole as an athlete or volunteer.</p>

    <form id="aith_form" method="post" action="">
        <ul>

            <li id="li_1">
                <div>
                    <label class="description" for="element_1">Name</label>
                </div>
                <div>
                    <input id="element_1" name="fullname" class="formName" type="text" maxlength="50" value="" required />
                </div>
            </li>

            <li id="li_2">
                <label class="description" for="element_2">Age</label>
                <div>
                    <input id="element_2" name="age" class="formAge" type="text" maxlength="3" value="" required />
                </div>
            </li>

            <li id="li_7">
                <label class="description" for="element_7">Gender</label>
                <div>
                    <select class="formGender" id="element_7" name="gender" required>
                        <option value="" selected="selected"></option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Non-binary">Non-binary</option>
                        <option value="Other">Other</option>

                    </select>
                </div>
            </li>

            <li id="li_9">
                <label class="description" for="element_9">I want to be a/an</label>
                <div>
                    <select class="element select medium" id="element_9" name="athletevolunteer" required>
                        <option value="" selected="selected"></option>
                        <option value="Athlete">Athlete</option>
                        <option value="Volunteer">Volunteer</option>
                    </select>
                </div>
            </li>

            <li id="li_8">
                <label class="description" for="element_8">The Event I Wish to Participate in is</label>
                <div>
                    <select class="formEvent" id="element_8" name="event" required>
                        <option value="" selected="selected"></option>
                        <option value="Long Course">Long Course</option>
                        <option value="Olympic">Olympic</option>
                        <option value="10K">10K</option>
                        <option value="Half Marathon">Half Marathon</option>
                        <option value="Sprint">Sprint</option>
                        <option value="Try-a-Tri">Try-a-Tri</option>

                    </select>
                </div>
            </li>

            <li id="li_3">
                <label class="description" for="element_3">My Email</label>
                <div>
                    <input id="element_3" name="email" class="formEmail" type="text" maxlength="320" value="" required />
                </div>
            </li>

            <li id="li_4">
                <label class="description" for="element_4">Emergency Contact Name</label>
                <div>
                    <input id="element_4" name="emergencyname" class="formEmergencyName" type="text" maxlength="50" value="" required />
                </div>
            </li>

            <li id="li_5">
                <label class="description" for="element_5">Emergency Contact Phone</label>
                <input type="tel" id="element_5" name="emergencyphone" pattern="[0-9]{10}" maxlength="10">
            </li>

            <li id="li_6">
                <label class="description" for="element_6">Additional Accommodations</label>
                <div>
                    <textarea id="element_6" name="accommodations" class="formAccommodations" maxlength="2000"></textarea>
                </div>
            </li>

            <li class="formSubmit">
                <input type="hidden" name="form_id" value="100412" />

                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
            </li>
        </ul>
    </form>

</div>
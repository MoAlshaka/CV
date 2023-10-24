<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Survey Form</title>
  </head>
  <body>
    <div class="container">
      <header id="header">
        <h1 id="title">Gaming Survey Form</h1>
        <p id="description">
          &quot;What is a man? A miserable little pile of secrets!&quot;
        </p>
      </header>
      <form action="{{route('cv.info')}}" id="survey-form" method="POST">
        @csrf
        <div class="form-div">
          <label for="name" id="name-label">Name:</label>
          <input
            type="text"
            name="name"
            id="name"
            class="normal-input"
            placeholder="Enter Your Full Name"
            required
          />
        </div>
        <hr />
        <div class="form-div">
          <label for="date" id="date-label">Birthday:</label>
          <input
            type="date"
            name="date"
            id="date"
            class="normal-input"
            placeholder="date"
            min="12"
            max="100"
          />
        </div>
        <hr />
        <div class="form-div">
          <label for="phone" id="phone-label">Phone:</label>
          <input
            type="tel"
            name="phone"
            id="phone"
            class="normal-input"
            placeholder="11-205-65-893"
            required
          />
        </div>
        <hr />
        <div class="form-div">
          <label for="adress" id="adress-label">Adress:</label>
          <input
            type="text"
            name="adress"
            id="adress"
            class="normal-input"
            placeholder="Adress"
          />
        </div>
        <hr />
        <div class="form-div">
          <label for="adress" id="education-label">Education:</label>
          <div class="group-input">
            <input
              type="text"
              name="institution"
              id="education-institution"
              class="normal-input"
              placeholder="Institution"
            />
            <input
              type="text"
              name="degree"
              id="education-degree"
              class="normal-input"
              placeholder="Degree"
            />
          </div>
          <div class="group-input">
            <input
              type="text"
              name="areaOfStudy"
              id="education-areaOfStudy"
              class="normal-input"
              placeholder="areaOfStudy"
            />
            <input
              type="text"
              name="grade"
              id="education-grade"
              class="normal-input"
              placeholder="grade"
            />
          </div>
          <div class="group-input">
            <div class="date-div">
              <label for="startEducationDate" id="startEducationDate-label">Start Date:</label>
              <input
                type="date"
                name="startEducationDate"
                id="startEducationDate"
                class="normal-input"
                placeholder="startDate"
                min="12"
                max="100"
              />
            </div>
            <div class="date-div">
              <label for="endEducationDate" id="endDate-label">End Date:</label>
              <input
                type="date"
                name="endEducationDate"
                id="endDate"
                class="normal-input"
                placeholder="endEducationDate"
                min="12"
                max="100"
              />
            </div>
          </div>
        </div>
        <hr />
        <div class="form-div" id="workExpContainer">
          <div class="workExp">
            <div class="label" for="work-companyName" id="work-label">
              <span>Work Experience:</span>
              <span class="delete first">x</span>
            </div>
            <div class="group-input">
              <input
                type="text"
                name="companyName"
                id="work-companyName"
                class="normal-input"
                placeholder="companyName"
              />
              <input
                type="text"
                name="position"
                id="work-position"
                class="normal-input"
                placeholder="position"
              />
            </div>
            <div class="group-input">
              <div class="date-div">
                <label for="startDate" id="workStart-label">Start Date:</label>
                <input
                  type="date"
                  name="startDate"
                  id="workStartDate"
                  class="normal-input"
                  placeholder="startDate"
                />
              </div>
              <div class="date-div">
                <label for="endDate" id="workEnd-label">End Date:</label>
                <input
                  type="date"
                  name="endDate"
                  id="workEndDate"
                  class="normal-input"
                  placeholder="endDate"
                />
              </div>
            </div>
          </div>
          <hr class="seperate" />
        </div>
        <div class="btn" id="addWorkExp">Add Work Experience</div>
        <hr />
        <div class="form-div" id="skills">
          <div class="skills-sec">
            <div class="label" id="skill-label">
              <span>Skill:</span>
              <span class="delete first">x</span>
            </div>
            <input
              type="text"
              name="skill"
              id="skill"
              class="normal-input"
              placeholder="Skill Name"
              required
            />
            <hr class="seperate" />
          </div>
        </div>
        <div class="btn" id="addSkill">Add Skill</div>
        <hr />
        <div class="form-div" id="languages">
          <div class="lang-sec">
            <div class="lang-sec">
              <div class="label" id="lang-label">
                <span>Language:</span>
                <span class="delete first">x</span>
              </div>
              <div class="group-input">
                <div class="date-div">
                  <label for="langName" id="langName-label">Name:</label>
                  <input
                    type="text"
                    name="langName"
                    id="langName"
                    class="normal-input"
                    placeholder="Language"
                  />
                </div>
                <div class="date-div">
                  <label for="langLvl" id="langLvl-label"
                    >Language Level:</label
                  >
                  <select name="langLvl" id="langLvl" class="normal-input">
                    <option disabled selected>Select Level</option>
                    <option value="action">Beginner</option>
                    <option value="sandbox">Intermediate</option>
                    <option value="rpg">Advance</option>
                    <option value="racing">Native</option>
                  </select>
                </div>
              </div>
              <hr class="seperate" />
            </div>
          </div>
        </div>
        <div class="btn" id="addLang">Add Language</div>
        <hr />
        <div class="form-div">
          <p>Marital Status</p>
          <select name="martialStatus" id="martialStatus" class="normal-input">
            <option disabled selected>Select Genres</option>
            <option value="single">single</option>
            <option value="married">married</option>
            <option value="divorce">divorce</option>
          </select>
        </div>
        <hr />
        <div class="form-div">
          <p>Military Status</p>
          <select
            name="militaryStatus"
            id="militaryStatus"
            class="normal-input"
          >
            <option disabled selected>Select Genres</option>
            <option value="enlisted">enlisted</option>
            <option value="served">served</option>
            <option value="exempt">exempt</option>
          </select>
        </div>
        <hr />
        <div class="form-div">
          <label for="nationality" id="name-label">Nationality:</label>
          <input
            type="text"
            name="nationality"
            id="nationality"
            class="normal-input"
            placeholder="Enter Your Nationality"
            required
          />
        </div>
        <hr />
        <div class="form-div">
          <p>Summery about Your Self</p>
          <textarea
            name="comment"
            rows="10"
            placeholder="Enter Your Comment here..."
          ></textarea>
        </div>
        <div class="form-div">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>

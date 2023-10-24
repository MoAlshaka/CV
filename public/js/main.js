// Function to create a new work experience element
let idCounter = 1;

function createWorkExp() {
  const workExpContainer = document.querySelector("#workExpContainer");
  // Create the work experience element
  const workExpDiv = document.createElement("div");
  workExpDiv.classList.add("workExp");
  const workExpElements = `
<div class="label" for="work-companyName" id="work-label-${idCounter}">
<span>Work Experience:</span>
<span class="delete">x</span>
</div>
<div class="group-input">
<input
  type="text"
  name="companyName-${idCounter}"
  id="work-companyName-${idCounter}"
  class="normal-input"
  placeholder="companyName"
/>
<input
  type="text"
  name="position-${idCounter}"
  id="work-position-${idCounter}"
  class="normal-input"
  placeholder="position"
/>
</div>
<div class="group-input">
<div class="date-div">
  <label for="startDate" id="workStart-label-${idCounter}">Start Date:</label>
  <input
    type="date"
    name="startDate-${idCounter}"
    id="workStartDate-${idCounter}"
    class="normal-input"
    placeholder="startDate"
  />
</div>
<div class="date-div">
  <label for="startDate" id="workEnd-label-${idCounter}">End Date:</label>
  <input
    type="date"
    name="startDate-${idCounter}"
    id="workEndDate-${idCounter}"
    class="normal-input"
    placeholder="startDate"
  />
</div>
</div>
<hr class="seperate" />
`;

  // HTML content for the work experience element
  workExpDiv.innerHTML = workExpElements;
  // Append the new work experience element to the container
  workExpContainer.appendChild(workExpDiv);
  idCounter++;
}
function createSkill() {
  const skillContainer = document.querySelector("#skills");
  // Create the work experience element
  const skillDiv = document.createElement("div");
  skillDiv.classList.add("skills-sec");
  const skillElements = `<div class="label" id="skill-label-${idCounter}">
  <span>Skill:</span>
  <span class="delete">x</span>
</div>
<input
  type="text"
  name="skill-${idCounter}"
  id="skill-${idCounter}"
  class="normal-input"
  placeholder="Skill Name"
  required
/>
<hr class="seperate" />`;

  // HTML content for the work experience element
  skillDiv.innerHTML = skillElements;
  // Append the new work experience element to the container
  skillContainer.appendChild(skillDiv);
  idCounter++;
}

function createLang() {
  const langContainer = document.querySelector("#languages");
  // Create the work experience element
  const langDiv = document.createElement("div");
  langDiv.classList.add("lang-sec");
  const langElement = `<div class="label" id="lang-label-${idCounter}">
  <span>Language:</span>
  <span class="delete">x</span>
</div>
<div class="group-input">
  <div class="date-div">
    <label for="langName" id="langName-label-${idCounter}">Name:</label>
    <input
      type="text"
      name="langName-${idCounter}"
      id="langName-${idCounter}"
      class="normal-input"
      placeholder="Language"
    />
  </div>
  <div class="date-div">
    <label for="langLvl" id="langLvl-label-${idCounter}"
      >Language Level:</label
    >
    <select name="langLvl" id="langLvl-${idCounter}" class="normal-input">
      <option disabled selected>Select Level</option>
      <option value="Beginner">Beginner</option>
      <option value="Intermediate">Intermediate</option>
      <option value="Advance">Advance</option>
      <option value="Native">Native</option>
    </select>
  </div>
</div>
<hr class="seperate" />`;

  // HTML content for the work experience element
  langDiv.innerHTML = langElement;
  // Append the new work experience element to the container
  langContainer.appendChild(langDiv);
  idCounter++;
}

// Function to delete a work experience element
function deleteWorkExp(deleteButton) {
  const FatherContainer =
    deleteButton.parentElement.parentElement.parentElement;
  const workExpDiv = deleteButton.parentElement.parentElement;
  FatherContainer.removeChild(workExpDiv);
}

// Add
document.getElementById("addWorkExp").addEventListener("click", createWorkExp);
document.getElementById("addSkill").addEventListener("click", createSkill);
document.getElementById("addLang").addEventListener("click", createLang);

// Delete
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("delete")) {
    deleteWorkExp(e.target);
  }
});

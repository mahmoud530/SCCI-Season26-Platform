// make submit button able
const submitBtn = document.getElementById('submitBtn');
let deleteTask = document.getElementById('deleteTask');
deleteTask.addEventListener('click', (event) => {
    event.preventDefault();
    submitBtn.disabled = false;
});

// Add Task Section

let taskNameMessage = document.getElementById('taskNameMessage');
let fileMessage = document.getElementById('fileMessage');
let descriptionMessage = document.getElementById('descriptionMessage');
let deadlineMessage = document.getElementById('dueDateMessage');

taskNameMessage.textContent = "";
fileMessage.textContent = "";
descriptionMessage.textContent = "";
deadlineMessage.textContent = "";

// file upload
const taskFileInput = document.getElementById('taskFile');
const fileState = document.getElementById('fileUploadState');
const fileUploadedName = document.getElementById('fileUploadedName');

taskFileInput.addEventListener('change', function () {
    if (this.files.length > 0) {
        const fileName = this.files[0].name;
        fileMessage.textContent = "";
        fileState.textContent = "File Uploaded Successfully!";
        fileState.style.color = "green";
        fileUploadedName.textContent = fileName;
        fileUploadedName.style.display = "block";

    } else {
        fileState.textContent = "Drag and drop or click to browse";
        fileState.style.color = "";
        fileUploadedName.textContent = "";
        fileUploadedName.style.display = "none";
    }
});

// validate form

const submitForm = document.getElementById('validForm');

submitForm.addEventListener('submit', (event) => {
    event.preventDefault();
    let taskNameInput = document.getElementById('taskName').value.trim();
    let descriptionInput = document.getElementById('descriptionInput').value.trim();
    let deadlineInput = document.getElementById('dueDate').value;
    let taskFileInput = document.getElementById('taskFile').files[0];


    taskNameMessage.textContent = "";
    fileMessage.textContent = "";
    descriptionMessage.textContent = "";
    deadlineMessage.textContent = "";

    var isValid = true;


    if (taskNameInput === "") {
        taskNameMessage.textContent = "Task Name is required.";
        taskNameMessage.style.color = "red";
        taskNameMessage.style.fontSize = "12px";
        isValid = false;
    }
    if (!taskFileInput) {
        fileMessage.textContent = "Please upload a file.";
        fileMessage.style.color = "red";
        fileMessage.style.fontSize = "12px";
        isValid = false;
    }
    if (deadlineInput === "") {
        deadlineMessage.textContent = "Deadline is required.";
        deadlineMessage.style.color = "red";
        deadlineMessage.style.fontSize = "12px";
        isValid = false;
    }
    if (descriptionInput === "") {
        descriptionMessage.textContent = "Description is required.";
        descriptionMessage.style.color = "red";
        descriptionMessage.style.fontSize = "12px";
        isValid = false;
    }

    if (isValid) {
        // alert("Form submitted successfully!");
        submitForm.submit();
        submitBtn.disabled = true;
    }

});


// Add Materials Section
const materialForm = document.getElementById('validMaterialForm');
const materialNameInput = document.getElementById('materialName');
const sessionTypeInput = document.getElementById('sessionType');
const materialFileInput = document.getElementById('materialFile');

const materialNameMessage = document.getElementById('materialNameMessage');
const sessionTypeMessage = document.getElementById('sessionTypeMessage');
const materialFileMessage = document.getElementById('materialFileMessage');

const materialFileState = document.getElementById('materialFileState');
const materialFileUploadedName = document.getElementById('materialFileUploadedName');

// Clear messages function
function clearMaterialMessages() {
    materialNameMessage.textContent = "";
    sessionTypeMessage.textContent = "";
    materialFileMessage.textContent = "";
}

// File upload handling for material
if (materialFileInput) {
    materialFileInput.addEventListener('change', function () {
        if (this.files.length > 0) {
            const fileName = this.files[0].name;
            materialFileMessage.textContent = "";
            materialFileState.textContent = "File Uploaded Successfully!";
            materialFileState.style.color = "green";
            materialFileUploadedName.textContent = fileName;
            materialFileUploadedName.style.display = "block";
        } else {
            materialFileState.textContent = "Drag and drop or click to browse";
            materialFileState.style.color = "";
            materialFileUploadedName.textContent = "";
            materialFileUploadedName.style.display = "none";
        }
    });
}

// Validate Material Form
if (materialForm) {
    materialForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const materialName = materialNameInput.value.trim();
        const sessionType = sessionTypeInput.value;
        const file = materialFileInput.files[0];

        clearMaterialMessages();

        let isValid = true;

        if (materialName === "") {
            materialNameMessage.textContent = "Material Name is required.";
            materialNameMessage.style.color = "red";
            materialNameMessage.style.fontSize = "12px";
            isValid = false;
        }

        if (sessionType === "") {
            sessionTypeMessage.textContent = "Session Type is required.";
            sessionTypeMessage.style.color = "red";
            sessionTypeMessage.style.fontSize = "12px";
            isValid = false;
        }

        if (!file) {
            materialFileMessage.textContent = "Please upload a file.";
            materialFileMessage.style.color = "red";
            materialFileMessage.style.fontSize = "12px";
            isValid = false;
        }

        if (isValid) {
            // Un-comment to actually submit
            materialForm.submit();
            // alert("Material Added Successfully!");
        }
    });
}


// --- Tab Switching Logic ---
const technicalBtn = document.querySelectorAll('.materialTypeButton')[0];
const softSkillsBtn = document.querySelectorAll('.materialTypeButton')[1];

function switchTab(type) {
    if (!technicalBtn || !softSkillsBtn) return;

    if (type === 'technical') {
        technicalBtn.classList.add('active');
        softSkillsBtn.classList.remove('active');
    } else {
        softSkillsBtn.classList.add('active');
        technicalBtn.classList.remove('active');
    }

    const items = document.querySelectorAll('.materialItem');
    items.forEach(item => {
        const text = item.innerText.toLowerCase();
        // Adjust condition based on actual content
        const isSoftSkill = text.includes('soft') || text.includes('communication');

        if (type === 'soft') {
            if (isSoftSkill) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        } else {
            if (!isSoftSkill) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        }
    });
}

if (technicalBtn) {
    technicalBtn.addEventListener('click', () => {
        switchTab('technical');
    });
}

if (softSkillsBtn) {
    softSkillsBtn.addEventListener('click', () => {
        switchTab('soft');
    });
}

// Initialize Default Tab
switchTab('technical');

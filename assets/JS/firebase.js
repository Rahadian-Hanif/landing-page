import {initializeApp} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import {getDatabase, ref, set, push,child} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-database.js";


const firebaseConfig = {
  apiKey: "AIzaSyCOrGxsw5cqkV-DSwHd1WTCB6sYdPuq6eo",
  authDomain: "newsletter-8681e.firebaseapp.com",
  projectId: "newsletter-8681e",
  storageBucket: "newsletter-8681e.appspot.com",
  messagingSenderId: "426364605792",
  appId: "1:426364605792:web:27e536a56b0c38fbf9ba05"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const database = getDatabase(app);

submitData.addEventListener('click', (e) => {

var email = document.getElementById('email').value;
var name = document.getElementById('name').value;

const newKey = push(child(ref(database), 'users')).key;

set(ref(database, 'users/' + newKey), {
    name: name,
    email: email,
}).then(() => {
    // Data saved successfully!
    $('#alert-modal').modal('show');
})
    .catch((error) => {
        // The write failed...
        alert(error);
    });
document.getElementById("newsletter-form").reset();
});
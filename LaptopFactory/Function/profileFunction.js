// variables
let developers = [
    {
        name: "Arnel Gwen Nuqui",
        mainrole: "Backend",
        course: "BS Information Technology",
        yearlevel: "Second Year",
        role: "Backend Developer",
        age: "19",
        adress: "San Agustin Iba Zambales",
        fb: "https://www.facebook.com/profile.php?id=100010678688185",
        ig: "https://www.instagram.com/_wnnnuq/",
    },
    {
        name: "Francess John Fabian",
        mainrole: "UX Designer",
        course: "BS Information Technology",
        yearlevel: "Second Year",
        role: "UX Designer",
        age: "20",
        adress: "San Juan Cabangan Zambales",
        fb: "https://www.facebook.com/Pongpong.gelacio",
        ig: "https://www.instagram.com/pongiii_/",
    },
    {
        name: "Princess Joanna Chiong Lee",
        mainrole: "Backend",
        course: "BS Information Technology",
        yearlevel: "Second Year",
        role: "BackEnd Developer",
        age: "21",
        adress: "Banlog Palauig Zambales",
        fb: "https://www.facebook.com/prncssjnnl14",
        ig: "https://www.instagram.com/prncssjnnl14/"
    },
    {
        name: "Ashley Bungar Flores",
        mainrole: "Frontend",
        course: "BS Information Technology",
        yearlevel: "Second Year",
        role: "Frontend Developer",
        age: "19",
        adress: "Amungan Iba Zambales",
        fb: "https://www.facebook.com/ashleybungar.flores?mibextid=ZbWKwL",
        ig: "https://www.instagram.com/ashiiiieee_ley?igshid=ZGNjOWZkYTE3MQ",
    },
    {
        name: "Charlence Aquino Abujen",
        mainrole: "Frontend",
        course: "BS Information Technology",
        yearlevel: "Second Year",
        role: "Frontend Developer",
        age: "19",
        adress: "Amungan Iba Zambales",
        fb: "https://www.facebook.com/chachaabujen0916",
        ig: "https://www.instagram.com/_rlnchaa/",
    },
];
const arnelBtn = document.getElementById("arnel");
const francessBtn = document.getElementById("francess");
const princessBtn = document.getElementById("princess");
const ashleyBtn = document.getElementById("ashley");
const charlenceBtn = document.getElementById("charlene");
// functionality
display(0);
arnelBtn.addEventListener('click', () => {
    display(0);
});
francessBtn.addEventListener('click', () => {
    display(1);
});
princessBtn.addEventListener('click', () => {
    display(2);
});
ashleyBtn.addEventListener('click', () => {
    display(3);
});
charlenceBtn.addEventListener('click', () => {
    display(4);
});
function display(index){
    const descriptionContainer = document.querySelector('.description')
    const temp = `
    <div class="names">
        <h1>${developers[index].name}</h1>
        <span>${developers[index].mainrole}</span>
    </div>
    <div class="infos">
        <p>COURSE: ${developers[index].course}</p>
        <p>YEAR LEVEL ${developers[index].yearlevel}</p>
        <p>ROLE: ${developers[index].role}</p>
        <p>AGE: ${developers[index].age}</p>
        <p>ADDRESS: ${developers[index].adress}</p>
        <div class="socials">
            <i><a href="${developers[index].fb}" target="_blank"><img src="IMAGES/Icon/facebook.png" alt="" class="image"></a></i>
            <i><a href="${developers[index].ig}" target="_blank"><img src="IMAGES/Icon/instagram.png" alt="" class="image"></a></i>
        </div>
    </div>
    `; 
    descriptionContainer.innerHTML = temp;
}

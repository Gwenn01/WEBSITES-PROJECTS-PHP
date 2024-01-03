//VARIABLES
// variables for generating data
let laptops = [{
    name: 'ASUS',
    category: 'TUF',
    fullname: 'ASUS TUF Gaming A16 Advantage Edition (2023)',
    image: 'ASUS TUF Gaming A16 Advantage Edition (2023).webp',
    price: 56000.00,
    details: 'Windows 11 Pro ,	Up to AMD Ryzen™ 7040 Series Processor , Up to AMD Radeon™ RX7700S Mobile Graphics ,Up to QHD 240Hz 16-inch display , Arc Flow Fans™, up to 7 heatpipes , 	Up to 2TB PCIe Gen4x4 SSD, DDR5 RAM , 	90Wh battery, USB-C power delivery , 	New Sandstorm paint, MIL-STD-810H standards ,',
}, {
    name: 'ASUS',
    category: 'TUF',
    fullname: 'ASUS TUF Gaming F17 (2023)',
    image: 'ASUS TUF Gaming F17 (2023).webp',
    price: 80000.00,
    details: 'Windows 11 Pro , Up to GeForce RTX™ 4070 Laptop GPU , AMD Ryzen™ 7040 Series Processor , 90W battery , Type C Fast Charging , 84 blades Arc-Flow Fans & 4 exhaust vents , Mux Switch with NVIDIA Advanced Optimus , MIL-STD-810H Standard ,',
}, {
    name: 'ASUS',
    category: 'TUF',
    fullname: 'ASUS TUF Dash F15 (2022)',
    price: 43000.00,
    image: 'ASUS TUF Dash F15 (2022).webp',
    details: 'Windows 11 Pro , Up to GeForce RTX™ 4070 Laptop GPU , AMD Ryzen™ 7040 Series Processor , 90W battery , Type C Fast Charging , 84 blades Arc-Flow Fans & 4 exhaust vents , Mux Switch with NVIDIA Advanced Optimus , MIL-STD-810H Standards ,',
}, {
    name: 'ASUS',
    category: 'TUF',
    fullname: 'ASUS TUF Gaming A15 (2023)',
    image: 'ASUS TUF Gaming A15 (2023).webp',
    price: 54000.00,
    details: 'Windows 11 Pro , Up to GeForce RTX™ 4070 Laptop GPU , Intel® Core™ i9-13900H Processor , 90W battery , Type C Fast Charging , 84 blades Arc-Flow Fans & 4 exhaust vents , Mux Switch with NVIDIA Advanced Optimus , MIL-STD-810H Standards ,',
}, {
    name: 'ASUS',
    category: 'TUF',
    fullname: 'ASUS TUF Gaming A17 (2023)',
    image: 'ASUS TUF Gaming A17 (2023).webp',
    price: 64000.00,
    details: 'Windows 11 Pro , Up to GeForce RTX™ 4070 Laptop GPU ,Intel® Core™ i9-13900H Processor , 90W battery ,Type C Fast Charging , 84 blades Arc-Flow Fans & 4 exhaust vents , Mux Switch with NVIDIA Advanced Optimus , MIL-STD-810H Standards , '
}, {
    name: 'ASUS',
    category: 'TUF',
    fullname: 'ASUS TUF Gaming F15 (2023)',
    image: 'ASUS TUF Gaming F15 (2023).webp',
    price: 75000.00,
    details: 'Windows 11 Pro , Up to GeForce RTX™ 3070 Laptop GPU , Intel® Core™ i7-12650H Processor  , Up to 15.6” QHD 165Hz 100% DCI-P3 Display  , Arc Flow Fans™ , MIL-STD-810H Standards , 19.95mm Thin Chassis , All-day Battery Life & 100W Type-C Charging ,',
}, {
    name: 'ASUS',
    category: 'ROG',
    fullname: 'ROG Flow Z13 (2023) GZ301VV-MU013X',
    image: 'ROG Zephyrus Duo 16 (2023) GX650PV-NM010X.webp',
    price: 43000.00,
    details: 'NVIDIA® GeForce RTX™ 4060 Laptop GPU , Windows 11 Pro , 13th Gen Intel® Core™ i9-13900H , ROG Nebula Display , , QHD+ 16:10 (2560 x 1600, WQXGA), Refresh Rate:165Hz , 1TB PCIe® 4.0 NVMe™ M.2 SSD (2230) ,',
}, {
    name: 'ASUS',
    category: 'ROG',
    fullname: 'ROG Flow Z13 (2023) GZ301VU-MU009X',
    image: 'ROG Flow Z13 (2023).webp',
    price: 63000.00,
    details: 'NVIDIA® GeForce RTX™ 4050 Laptop GPU , Windows 11 Pro , 13th Gen Intel® Core™ i9-13900H , ROG Nebula Display , QHD+ 16:10 (2560 x 1600, WQXGA), Refresh Rate:165Hz , 1TB PCIe® 4.0 NVMe™ M.2 SSD (2230) ,',
}, {
    name: 'ASUS',
    category: 'ROG',
    fullname: 'ROG Flow Z13 (2023) GZ301VF-MU010X',
    image: 'ROG Flow Z13 (2023).webp',
    price: 54000.00,
    details: 'NVIDIA® GeForce RTX™ 2050 , Windows 11 Pro , 13th Gen Intel® Core™ i9-13900H , ROG Nebula Display , , QHD+ 16:10 (2560 x 1600, WQXGA), Refresh Rate:165Hz , 512GB PCIe® 4.0 NVMe™ M.2 SSD (2230) ,',
}, {
    name: 'ASUS',
    category: 'ROG',
    fullname: 'ROG Zephyrus Duo 16 (2023) GX650PZ-NM055X',
    image: 'ROG Zephyrus Duo 16 (2023) GX650PV-NM010X.webp',
    price: 46000.00,
    details: 'NVIDIA® GeForce RTX™ 4080 Laptop GPU , Windows 11 Pro , AMD Ryzen™ 9 7945HX, 16 inch, QHD+ 16:10 (2560 x 1600, WQXGA), Refresh Rate:240Hz, Additional Display: 14" 3840 x 1100(4K) IPS-level Panel, 2TB + 2TB PCIe® 4.0 NVMe™ M.2 Performance SSD (RAID 0) ,',
}, {
    name: 'ASUS',
    category: 'ROG',
    fullname: 'ROG Zephyrus Duo 16 (2023) GX650PY-NM044X',
    image: 'ROG Zephyrus Duo 16 (2023) GX650PV-NM010X.webp',
    price: 45000.00,
    details: 'NVIDIA® GeForce RTX™ 4090 Laptop GPU, Windows 11 Pro, AMD Ryzen™ 9 7945HX, 16 inch, QHD+ 16:10 (2560 x 1600, WQXGA), Refresh Rate:240Hz, Additional Display: 14" 3840 x 1100(4K) IPS-level Panel, 2TB + 2TB PCIe® 4.0 NVMe™ M.2 Performance SSD (RAID 0) ,',
}, {
    name: 'ASUS',
    category: 'ROG',
    fullname: 'ROG Zephyrus Duo 16 (2023) GX650PV-NM010X',
    image: 'ROG Zephyrus Duo 16 (2023) GX650PV-NM010X.webp',
    price: 49000.00,
    details: 'NVIDIA® GeForce RTX™ 4060 Laptop GPU, Windows 11 Pro , AMD Ryzen™ 9 7945HX, 16 inch, QHD+ 16:10 (2560 x 1600, WQXGA), Refresh Rate:240Hz, Additional Display: 14" 3840 x 1100(4K) IPS-level Panel, 2TB + 2TB PCIe® 4.0 NVMe™ M.2 Performance SSD (RAID 0) ,',
}, {
    name: 'ACER',
    category: 'NITRO',
    fullname: 'Nitro AN515-58-50YE (Best for Gaming)',
    image: 'Acer Nitro.webp',
    price: 67000.00,
    details: 'Windows 11 Home , Intel Core i5-12500H , 8GB LPDDR4 , 512GB SSD , 4GB NVIDIA GeFore RTXTM 3050 , 15.6 IPS Full HD 1920x1080 ,',
}, {
    name: 'ACER',
    category: 'NITRO',
    fullname: 'Nitro 5 AN515-58-78EN',
    image: 'nitros.webp',
    price: 73000.00,
    details: 'Windows 11 Home, Intel® Core i7-12700H, 8GB DDR4, 512GB NVMe SSD (HDD Upgrade Kit Included) , 15.6 display Full HD 1920 x1080, NVIDIA® GeForce RTXTM 3050,',
}, {
    name: 'ACER',
    category: 'NITRO',
    fullname: 'Nitro 5 AN515-58-55LG',
    image: 'nitros.webp',
    price: 65000.00,
    details: 'Windows 11 Home, Intel® Core i5-12500H, 8GB DDR4 Memory, 512GB NVMe SSD (HDD Upgrade Kit included) , 15.6 Full HD 1920 x1080, NVIDIA® GeForce RTXTM 3050 Ti,',
}, {
    name: 'ACER',
    category: 'NITRO',
    fullname: 'Nitro 5 AN515-45-R5RJ (Best for Gaming)',
    image: 'Acer Nitro.webp',
    price: 63000.00,
    details: 'Windows 11 Home, AMD RyzenTM 9 5900HX , 16GB DDR4 , 512GB NVMe SSD, 15.6 FHD 1920x1080, NVIDIA GeForce RTXTM 3070,',
}, {
    name: 'ACER',
    category: 'PREDATOR',
    fullname: 'Predator Helios 300 PH16-71-95L8',
    image: 'helios 16.webp',
    price: 118740.00,
    details: 'Windows 11 Home,Intel® Core™ i9-13900HX processor , 16GB DDR4 , 512GB NVMe SSD, 15.6 FHD 1920x1080, NVIDIA GeForce RTXTM 3070, 2 Years Warranty ,',
},  {
    name: 'ACER',
    category: 'PREDATOR',
    fullname: 'Predator Helios 300 PH16-71-72VB',
    image: 'predator1.webp',
    price: 92000.00,
    details: 'Windows 11 Home,Intel® Core i5-13500HX processor , 88GB + 8GB(separate) of DDR5 upgradable to 32 GB , 16.0 display with IPS , WUXGA 1920 x 1200, 15.6 FHD 1920x1080,NVIDIA® GeForce RTX™ 4060 with 8GB of dedicated GDDR6 VRAM, 2 Years Warranty ,',
}, {
    name: 'ACER',
    category: 'PREDATOR',
    fullname: 'Predator Helios Neo PHN16-71-795K OPI',
    image: 'predator2.webp',
    price: 118740.00,
    details: 'Windows 11 Home,Intel® Core™ i7-13700HX , 8GB of DDR5 upgradable to 32 GB , 16.0 display with IPS , WUXGA 1920 x 1200, 15.6 FHD 1920x1080,NVIDIA® GeForce RTX™ 4060 with 8GB of dedicated GDDR6 VRAM, 2 Years Warranty ,',
}, {
    name: 'ACER',
    category: 'PREDATOR',
    fullname: 'Predator Helios Neo PHN16-71-59F1 OPI',
    image: 'predator3.webp',
    price: 71249.00,
    details: 'Windows 11 Home,Intel® Core™ i5-13700HX , 8GB + 8GB of DDR5 upgradable to 32 GB , 16.0 display with IPS WQXGA 2560 x 1600 , WUXGA 1920 x 1200, 15.6 FHD 1920x1080,NVIDIA® GeForce RTX™ 4060 with 8GB of dedicated GDDR6 VRAM, 2 Years Warranty ,',
}, {
    name: 'ACER',
    category: 'PREDATOR',
    fullname: 'Predator Helios 300 PH315-54-55NE',
    image: 'predator1.webp',
    price: 83599.00,
    details: 'Windows 11 Home,Intel® Core™ i5-13700HX , 8GB + 8GB of DDR5 upgradable to 32 GB, WUXGA 1920 x 1200 15.6 FHD 1920x1080 , NVIDIA® GeForce RTX™ 4060 with 8GB of dedicated GDDR6 VRAM , 16.0 display with IPS WQXGA 2560 x 1600 , 2 Years Warranty',
}, {
    name: 'HP',
    category: 'VICTUS',
    fullname: 'HP Laptop 17t-cw000.17.3',
    image: 'hp1.png',
    price: 63599.00,
    details: 'Windows 11 Home,Intel® Core™ i5-13700HX ,  i7-13700H (up to 5.0 GHz, 24 MB L3 cache , Intel® Iris® Xe Graphics , 6 GB DDR4-3200 SDRAM, 512 GB PCIe® NVMe™ M.2 SSD',
}, {
    name: 'HP',
    category: 'PAVILLON',
    fullname: 'HP Laptop 15-eg3087',
    image: 'hp2.png',
    price: 50431.00,
    details: 'Windows 11 Home,Intel® Core™ i5-13700HX ,  13th Generation Intel® Core™ i7 processor , intel® Iris® Xᵉ Graphics ,16 GB memory; 1 TB HDD storage; 256 GB SSD storage, 17.3" diagonal FHD display',
}, {
    name: 'HP',
    category: 'PAVILLON',
    fullname: 'HP Laptop 17-eg3087nr',
    image: 'hp4.png',
    price: 43299.00,
    details: 'Windows 11 Home,Intel® Core™ i5-13700HX ,  13th Generation Intel® Core™ i7 processor , intel® Iris® Xᵉ Graphics ,16 GB memory; 512 GB SSD storage, 15.6" diagonal FHD display',
}, {
    name: 'HP',
    category: 'VICTUS',
    fullname: 'HP Laptop 17t-cw000.17.3',
    image: 'hp3.png',
    price: 52399.00,
    details: 'Windows 11 Home,AMD Ryzen™ 7 processor ,  AMD Radeon™ Graphics,16 GB memory; 1 TB SSD storage , Intel® Iris® Xe Graphics ,15.6" diagonal FHD touch display',
},
];
// container for html element
let laptopsContainer = [];
// variable for container
const containerEl = document.querySelector('.container');
// variable for select type
const typesSelectEle = document.getElementById('types');
// variable for select category
const categorySelectEl = document.getElementById('category');
//variables for header
const searchText = document.getElementById('search-text');
const searchBtn = document.getElementById('search-btn');
let inputSearch = "";
// varibles for sidebar
const sidebarEl = document.querySelector('.sidebar');
const headerNameEl = document.querySelector('.header-name');
let isAlreadGoInProduct = false;
// varibale for cart
const cartContainer = [];
const cartBtn = document.getElementById('cart');
const checkOutBtn = document.getElementById('check-out');
// FUNCTIONALITY
// shuffle or rumbles our products 
function shuffleArray(array) {
    // Function to generate random numbers between -0.5 and 0.5
    function getRandom() {
      return Math.random() - 0.5;
    }
  
    // Use sort with the getRandom function to shuffle the array
    array.sort(getRandom);
  }
shuffleArray(laptops);
//HEADER
// inputs text
searchText.addEventListener('input', () => {
    if (!isAlreadGoInProduct){
        window.location.href = '#main-products'; 
        isAlreadGoInProduct = true;
    }
    inputSearch = searchText.value;
    displayAll();
    // updating the quick view
    quickViewFunction();
});
window.addEventListener('scroll', () => {
    isAlreadGoInProduct = false;
});
// search btn
searchBtn.addEventListener('click', () => {
    findTheItem(inputSearch.toUpperCase())
    // updating the quick view
    quickViewFunction();
});
// function for search to find the specific item
function findTheItem(searchValue){
    if(displayBaseOnType(searchValue)){
        return true;
    }
    if (displayBaseOnCategory(searchValue)){
        return true;
    }
    return false;
};
//ACOUNTS FUNCTIONALITY
// SIDEBAR
sidebarEl.addEventListener('mouseenter', () => {
    headerNameEl.style.left = "50px";
});
sidebarEl.addEventListener('mouseleave', () => {
    headerNameEl.style.left = "-200px";
});
//COVER PAGES
// MAIN
generateProducts();
// generating the products div
function generateProducts(){
    laptops.forEach(item => {
        let temp = `
                <div class="products" data-name="${item['name']}" data-category="${item['category']}" data-image="${item['image']}" data-fullname="${item['fullname']}" data-details="${item['details']}" data-price="${item['price']}">
                    <img src="IMAGES/Image/${item['image']}" alt="logo" class="product-image">
                    <span class="fullname">${item['fullname']}</span>
                    <button class="quick-view">Quick View</button>
                </div>
               `;
        laptopsContainer.push(temp);
    });
    displayAll();
    quickViewFunction();
};
// displaying in the container
function displayAll(){
    let concatenate = "";
    laptopsContainer.forEach((item) => {
        concatenate += item;
    });
    containerEl.innerHTML = concatenate;
};
// QUICK VIEW functionality or showing the DETAILS
function quickViewFunction(){
    // for quick change button or details
    const quickViewbtn  = document.querySelectorAll('.quick-view');
    const products = document.querySelectorAll('.products');
    // put in html
    const detailsContainerEl = document.querySelector('.details');
    quickViewbtn.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            // variables for our data laptops, updated per div container products
            const quickName = products[index].getAttribute('data-name');
            const quickImage = products[index].getAttribute('data-image');
            const quickFullname = products[index].getAttribute('data-fullname');
            const quickDetails = products[index].getAttribute('data-details');
            const quickPrice = products[index].getAttribute('data-price');
            detailsContainerEl.innerHTML = `
                <div class="image-title">
                <img src="IMAGES/Image/${quickImage}" alt="img" id="quick-view">
                <span>${quickFullname}</span>
                </div>
                <div class="details-product">
                    ${arranegDetails(quickDetails)}
                    <h2>₱${quickPrice}.00</h2>
                    <button id="add-cart">ADD CART <img src="IMAGES/Icon/cart-icon-two.png" alt="cart"></button>
                </div>
                <button id="remove">x</button>
            `;
            detailsContainerEl.style.top = "800px";
            // for remove btn in details
            const removeBtn = document.getElementById('remove');
            removeBtn.addEventListener('click', () => {
                detailsContainerEl.style.top = "-550px";
            });
            // for cart btn in details 
            const addCartBtn = document.getElementById('add-cart');
            addCartBtn.addEventListener('click', () => {
                const successfullyAddEl = document.querySelector('.successfully-add');
                successfullyAddEl.style.top = "1000px";
                setTimeout(successfullyAdd, 1000);
                let temp = {
                   name: quickName,
                   fullname: quickFullname,
                   price: quickPrice,
                   image: quickImage,
                   isCheck: false,
                }
                cartContainer.push(temp);
            });
        });
    });
};
// for successfully add
function successfullyAdd(){
    const successfullyAddEl = document.querySelector('.successfully-add');
    successfullyAddEl.style.top = "-110px";
};
// for aranging the details
function arranegDetails(details){
    result = '';
    temp = "";
    for(let detail of details){
        if (detail == ','){
            result += temp + '<br>';
            temp = "";
        }else{
            temp += detail;
        }
    }
    return result
};
// CART functionality
cartBtn.addEventListener('click', () => {
    const cartContainerEl = document.querySelector('.cart-container');
    cartContainerEl.style.right = '0%';
    // DISPLAYING THE CONTAINER
    displayingThecart();
    // for remove cart
    const removeCartBtn = document.getElementById('remove-cart');
    removeCartBtn.addEventListener('click', () => {
        cartContainerEl.style.right = '-850px';
    });
    selectInCart();
    // Deleting item in cart using btn
    const deleteInCartBtn = document.getElementById('delete-item-cart');
    deleteInCartBtn.addEventListener('click', () => {
        // For select in cart function
        removeElemntInCartContainer();
        displayingThecart();
        computeThePrice();
        checkOut();
        selectInCart();
    });
});
function displayingThecart(){
    result = "";
    cartContainer.forEach((cart) => {
        temp = `
        <div class="items">
            <input type="checkbox" class="select-in-cart" name="select-cart">
            <div class="image">
                <img src="IMAGES/Image/${cart.image}" alt="pic" class="cart-img">
            </div>
            <div class="name-price">
                <h3>${cart.name}</h3>
                <span class="fullname-cart">${cart.fullname}</span>
                <h1>₱${cart.price}.00</h1>
            </div>
        </div>
        `;
        result += temp; 
    });
    const cartContainerJsEl = document.querySelector('.cart-container-js');
    cartContainerJsEl.innerHTML = result;
};
// selecting in cart to delete or check out
function selectInCart(){
    const checkbox = document.querySelectorAll('.select-in-cart');
    checkbox.forEach((cart, index) => {
        cart.addEventListener('change', () => {
            if (cart.checked) {
                // we can determine if we remove this
                cartContainer[index].isCheck = true;
            }else{
                cartContainer[index].isCheck = false;
            }
            computeThePrice();
            checkOut();
        });
    });
};
// if is check is false remove the element in a cart
function removeElemntInCartContainer(){
    // we are looping in the array to check if the checkbox is check
    // if check we will remove it in cartContainer
    cartContainer.forEach((cart, index) => {
        if(cart.isCheck){
            removeElementInArray(cartContainer, index);
        }
    });
};
function computeThePrice(){
    let totalPrice = 0;
    const totalAmountEl = document.querySelector('.total-amount');
    cartContainer.forEach((cart) => {
        if(cart.isCheck){
            totalPrice += parseInt(cart.price)
        }
    });
    totalAmountEl.innerHTML = totalPrice;
    return totalPrice;
};
// removing an element in an array
function removeElementInArray(myArray, index){
    if (myArray.length == 1){
        myArray.pop();
    }
    for(let i = index; i < myArray.length-1; i++){
        myArray[i] = myArray[i+1]
    }
    myArray.pop();
};
// CHECK OUT FUNCTIONALITY
function checkOut(){
    checkOutBtn.addEventListener('click', () => {
        if(cartContainer.length > 0){
            window.location.href = "order.html";
        }
    });
}
// FUNCTIONALITY IN MAIN PRODUCTS IN TYPES AND CATEGORIES
// selecting the types
typesSelectEle.addEventListener('change', () => {
    const valueType = typesSelectEle.value;
    displayAll();
    if (valueType != 'All'){
        displayBaseOnType(valueType);
    }
    // CATEGORY SELECT
    if (valueType == "ASUS"){
        categorySelectEl.innerHTML = `
        <option value="ROG">ROG</option>
        <option value="TUF">TUF</option>
        `;
    }else if(valueType == "HP"){
        categorySelectEl.innerHTML = `
        <option value="VICTUS">VICTUS</option>
        <option value="PAVILLON">PAVILLON</option>
        `;
    }else if(valueType == "ACER"){
        categorySelectEl.innerHTML = `
        <option value="NITRO">NITRO</option>
        <option value="PREDATOR">PREDATOR</option>
        `;
    }else{
        categorySelectEl.innerHTML = ``;
    }
    quickViewFunction();
});

// displaying base on the given types
function displayBaseOnType(whatType){
    const products = document.querySelectorAll('.products');
    let concatenate = "";
    products.forEach((product, index) => {
        // to manipulate the data
        let type = product.getAttribute('data-name');
        if(whatType == type){
            // append the div
            concatenate += laptopsContainer[index];
        }
    });
    containerEl.innerHTML = concatenate;
     // for search btn
    return true;
};

// FUNCTIONALITY
// selecting the category
categorySelectEl.addEventListener('change', () => {
    const valueCategory = categorySelectEl.value;
    displayAll();
    displayBaseOnCategory(valueCategory);  
});

// displaying the categories
function displayBaseOnCategory(whatCategory){
    const products = document.querySelectorAll('.products');
    let concatenate = "";
    products.forEach((product, index) => {
        // to manipulate the data
        let type = product.getAttribute('data-category');
        if(whatCategory == type){
            // append the div
            concatenate += laptopsContainer[index];
        }
    });
    containerEl.innerHTML = concatenate;
    //to update the quick view 
    quickViewFunction();
    // for search btn
    return true;
};

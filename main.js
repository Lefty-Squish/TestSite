let username = "Lefty";

console.log(`${username}`);

//Tabs for Business Address Services
function openSolution(event, solutionName) {
    let i, tabContent, BASLinks;
    tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    BASLinks = document.getElementsByClassName("BASLinks");
    for (i = 0; i < BASLinks.length; i++) {
        BASLinks[i].className = BASLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(solutionName).style.display = "block";
    event.currentTarget.className += " sub-active";
}

//Tabs for Telephone Answering Service
function openTab(event, tabName) {
    let i, TASContent, TASLinks;
    TASContent = document.getElementsByClassName("TASContent");
    for (i = 0; i < TASContent.length; i++) {
        TASContent[i].style.display = "none";
    }

    TASLinks = document.getElementsByClassName("TASLinks");
    for (i = 0; i < TASLinks.length; i++) {
        TASLinks[i].className = TASLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(tabName).style.display = "block";
    event.currentTarget.className += " sub-active";
}

//Tabs for Company Formation & Ready Made Companies
function openCF(event, CFName) {
    let i, CFContent, CFLinks;
    CFContent = document.getElementsByClassName("CFContent");
    for (i = 0; i < CFContent.length; i++) {
        CFContent[i].style.display = "none";
    }

    CFLinks = document.getElementsByClassName("CFLinks");
    for (i = 0; i < CFLinks.length; i++) {
        CFLinks[i].className = CFLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(CFName).style.display = "block";
    event.currentTarget.className += " sub-active";
}

//Tabs for Meeting Rooms
function openMeeting(event, meetingName) {
    let i, meetingContent, meetingLinks;
    meetingContent = document.getElementsByClassName("meetingContent");
    for (i = 0; i < meetingContent.length; i++) {
        meetingContent[i].style.display = "none";
    }

    meetingLinks = document.getElementsByClassName("meetingLinks");
    for (i = 0; i < meetingLinks.length; i++) {
        meetingLinks[i].className = meetingLinks[i].className.replace(" sub-active", "");
    }

    document.getElementById(meetingName).style.display = "block";
    event.currentTarget.className += " sub-active";
}

//Tabs for Virtual Office Packages
function openTables(event, packageName) {
    let i, privacyTable, VOPackages;
    privacyTable = document.getElementsByClassName("privacyTable");
    for (i = 0; i < privacyTable.length; i++) {
        privacyTable[i].style.display = "none";
    }

    VOPackages = document.getElementsByClassName("VOPackages");
    for (i = 0; i < VOPackages.length; i++) {
        VOPackages[i].className = VOPackages[i].className.replace(" currentlyActive", "");
    }

    document.getElementById(packageName).style.display = "block";
    event.currentTarget.className += " currentlyActive";
}

//For Business Address Sub Tabs
function openSubTabs(event, subTabName) {
    let i, subTable, BASubTab;
    subTable = document.getElementsByClassName("subTable");
    for (i = 0; i < subTable.length; i++) {
        subTable[i].style.display = "none";
    }

    BASubTab = document.getElementsByClassName("BASubTab");
    for (i = 0; i < BASubTab.length; i++) {
        BASubTab[i].className = BASubTab[i].className.replace(" activeBASubTab", "");
    }

    document.getElementById(subTabName).style.display = "block";
    event.currentTarget.className += " activeBASubTab";
}

//For Company Formation Sub Tabs
function openCFSubTabs(event, CFName) {
    let i, CFSubTable, CFSubTab;
    CFSubTable = document.getElementsByClassName("CFSubTable");
    for (i = 0; i < CFSubTable.length; i++) {
        CFSubTable[i].style.display = "none";
    }

    CFSubTab = document.getElementsByClassName("CFSubTab");
    for (i = 0; i < CFSubTab.length; i++) {
        CFSubTab[i].className = CFSubTab[i].className.replace(" activeCFSubTab", "");
    }

    document.getElementById(CFName).style.display = "block";
    event.currentTarget.className += " activeCFSubTab";
}

//Our Apps
function openApp(event, appName) {
    let i, appContent, ourApps;
    appContent = document.getElementsByClassName("appContent");
    for (i = 0; i < appContent.length; i++) {
        appContent[i].style.display = "none";
    }

    ourApps = document.getElementsByClassName("ourApps");
    for (i = 0; i < ourApps.length; i++) {
        ourApps[i].className = ourApps[i].className.replace(" activeAppTab", "");
    }

    document.getElementById(appName).style.display = "block";
    event.currentTarget.className += " activeAppTab";
}

//Our Locations
function openLocation(event, locationName) {
    let i, officeLocation, locationBtn;
    officeLocation = document.getElementsByClassName("officeLocation");
    for (i = 0; i < officeLocation.length; i++) {
        officeLocation[i].style.display = "none";
    }

    locationBtn = document.getElementsByClassName("locationBtn");
    for (i = 0; i < locationBtn.length; i++) {
        locationBtn[i].className = locationBtn[i].className.replace(" activeLocation", "");
    }

    document.getElementById(locationName).style.display = "block";
    event.currentTarget.className += " activeLocation";
}

//Navigation Drop Down
// Services Drop Down (from the navigation)
const dropDown1 = () => {
    const DropDownBtn1 = document.querySelector('#servicesDropDownBtn');
    const DropDown1 = document.querySelector('#servicesDropDown');
    const DropDownArrow1 = document.querySelector('#servicesDropDownArrow');

    DropDownBtn1.addEventListener('mouseover',() => {
        //hide show nav
        if(DropDown1.classList.contains("hideDropDown")){
            DropDown1.classList.remove('hideDropDown');
            DropDown1.classList.add('showDropDown1');
            DropDownArrow1.style.transform = "rotate(180deg)";

        }
    });

    DropDownBtn1.addEventListener('mouseout',() => {

        DropDown1.classList.add('hideDropDown');
        DropDown1.classList.remove('showDropDown1');
        DropDownArrow1.style.transform = "rotate(0deg)";

    });

    DropDownBtn1.addEventListener('click',() => {
        //hide show nav
        if(DropDown1.classList.contains("hideDropDown")){
            DropDown1.classList.remove('hideDropDown');
            DropDown1.classList.add('showDropDown1');
            DropDownArrow1.style.transform = "rotate(180deg)";
        }
        else{
            DropDown1.classList.add('hideDropDown');
            DropDown1.classList.remove('showDropDown1');
            DropDownArrow1.style.transform = "rotate(0deg)";
        }
    });
}

dropDown1();

//SERVICE PAGES - additional services drop down
const dropDown2 = () => {
    const DropDownBtn2 = document.querySelector('#aboutDropDownBtn');
    const DropDown2 = document.querySelector('#aboutDropDown');
    const DropDownArrow2 = document.querySelector ('#aboutDropDownArrow');

    DropDownBtn2.addEventListener('mouseover',() => {
        //hide show nav
        if(DropDown2.classList.contains("hideDropDown")){

            DropDown2.classList.remove('hideDropDown');
            DropDown2.classList.add('showDropDown1');

            DropDownArrow2.style.transform = "rotate(180deg)";

        }

        else{
            DropDown2.classList.add('hideDropDown');
            DropDown2.classList.remove('showDropDown1');

            DropDownArrow2.style.transform = "rotate(0deg)";
        }
    });

    DropDownBtn2.addEventListener('mouseout',() => {

        DropDown2.classList.add('hideDropDown');
        DropDown2.classList.remove('showDropDown1');
        DropDownArrow2.style.transform = "rotate(0deg)";

    });

    DropDownBtn2.addEventListener('click',() => {
        //hide show nav
        if(DropDown2.classList.contains("hideDropDown")){
            DropDown2.classList.remove('hideDropDown');
            DropDown2.classList.add('showDropDown1');
            DropDownArrow2.style.transform = "rotate(180deg)";
        }
        else{
            DropDown2.classList.add('hideDropDown');
            DropDown2.classList.remove('showDropDown1');
            DropDownArrow2.style.transform = "rotate(0deg)";
        }
    });

}

dropDown2();


//LOCATIONS DROP DOWN
const dropDown3 = () => {
    const DropDownBtn3 = document.querySelector('#locationDropDownBtn');
    const DropDown3 = document.querySelector('#locationDropDown');
    const DropDownArrow3 = document.querySelector ('#locationDropDownArrow');

    DropDownBtn3.addEventListener('mouseover',() => {
        //hide show nav
        if(DropDown3.classList.contains("hideDropDown")){

            DropDown3.classList.remove('hideDropDown');
            DropDown3.classList.add('showDropDown1');

            DropDownArrow3.style.transform = "rotate(180deg)";

        }

        else{
            DropDown3.classList.add('hideDropDown');
            DropDown3.classList.remove('showDropDown1');

            DropDownArrow3.style.transform = "rotate(0deg)";
        }
    });

    DropDownBtn3.addEventListener('mouseout',() => {

        DropDown3.classList.add('hideDropDown');
        DropDown3.classList.remove('showDropDown1');
        DropDownArrow3.style.transform = "rotate(0deg)";

    });

    DropDownBtn3.addEventListener('click',() => {
        //hide show nav
        if(DropDown3.classList.contains("hideDropDown")){
            DropDown3.classList.remove('hideDropDown');
            DropDown3.classList.add('showDropDown1');
            DropDownArrow3.style.transform = "rotate(180deg)";
        }
        else{
            DropDown3.classList.add('hideDropDown');
            DropDown3.classList.remove('showDropDown1');
            DropDownArrow3.style.transform = "rotate(0deg)";
        }
    });

}

dropDown3();


//Address Drop Down
const dropDown4 = () => {
    const DropDownBtn4 = document.getElementById('addressDropDownBtn')
    const DropDown4 = document.getElementById('addressDropDown');
    const DropDownArrow4 = document.getElementById('addressDropDownArrow');

    DropDownBtn4.addEventListener('mouseover',() => {
        //hide show nav
        if(DropDown4.classList.contains("hideDropDown")){

            DropDown4.classList.remove('hideDropDown');
            DropDown4.classList.add('showDropDown1');

            DropDownArrow4.style.transform = "rotate(180deg)";

        }

        else{
            DropDown4.classList.add('hideDropDown');
            DropDown4.classList.remove('showDropDown1');

            DropDownArrow4.style.transform = "rotate(0deg)";
        }
    });

    DropDownBtn4.addEventListener('mouseout',() => {

        DropDown4.classList.add('hideDropDown');
        DropDown4.classList.remove('showDropDown1');
        DropDownArrow4.style.transform = "rotate(0deg)";

    });

    DropDownBtn4.addEventListener('click',() => {
        //hide show nav
        if(DropDown4.classList.contains("hideDropDown")){
            DropDown4.classList.remove('hideDropDown');
            DropDown4.classList.add('showDropDown1');
            DropDownArrow4.style.transform = "rotate(180deg)";
        }
        else{
            DropDown4.classList.add('hideDropDown');
            DropDown4.classList.remove('showDropDown1');
            DropDownArrow4.style.transform = "rotate(0deg)";
        }
    });

}

dropDown4();

//Company Formation DROP DOWN
const dropDown5 = () => {
    const DropDownBtn5 = document.querySelector('#formationDropDownBtn');
    const DropDown5 = document.querySelector('#formationDropDown');
    const DropDownArrow5 = document.querySelector ('#formationDropDownArrow');

    DropDownBtn5.addEventListener('mouseover',() => {
        //hide show nav
        if(DropDown5.classList.contains("hideDropDown")){

            DropDown5.classList.remove('hideDropDown');
            DropDown5.classList.add('showDropDown1');

            DropDownArrow5.style.transform = "rotate(180deg)";

        }

        else{
            DropDown5.classList.add('hideDropDown');
            DropDown5.classList.remove('showDropDown1');

            DropDownArrow5.style.transform = "rotate(0deg)";
        }
    });

    DropDownBtn5.addEventListener('mouseout',() => {

        DropDown5.classList.add('hideDropDown');
        DropDown5.classList.remove('showDropDown1');
        DropDownArrow5.style.transform = "rotate(0deg)";

    });

    DropDownBtn5.addEventListener('click',() => {
        //hide show nav
        if(DropDown5.classList.contains("hideDropDown")){
            DropDown5.classList.remove('hideDropDown');
            DropDown5.classList.add('showDropDown1');
            DropDownArrow5.style.transform = "rotate(180deg)";
        }
        else{
            DropDown5.classList.add('hideDropDown');
            DropDown5.classList.remove('showDropDown1');
            DropDownArrow5.style.transform = "rotate(0deg)";
        }
    });

}

dropDown5();





































<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ГЛАВНАЯ");
?>
<svg width="0" height="0" class="hidden" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29" id="PhoneCall">
        <path d="M18 5C19.4381 5.38676 20.7493 6.14461 21.8024 7.19764C22.8554 8.25067 23.6132 9.5619 24 11"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M17 8C17.9587 8.25784 18.8329 8.76308 19.5349 9.46509C20.2369 10.1671 20.7422 11.0413 21 12"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M10.9997 14.5747C11.9484 16.5144 13.5207 18.0795 15.4647 19.0195C15.6069 19.0869 15.7643 19.1161 15.9212 19.1042C16.0781 19.0923 16.2293 19.0398 16.3598 18.9517L19.2221 17.0431C19.3487 16.9586 19.4944 16.9071 19.6459 16.8932C19.7974 16.8793 19.95 16.9034 20.0899 16.9633L25.4448 19.2583C25.6267 19.3356 25.7786 19.4699 25.8775 19.641C25.9765 19.8121 26.0171 20.0107 25.9934 20.2069C25.8241 21.5313 25.1779 22.7486 24.1758 23.6309C23.1736 24.5132 21.8842 24.9999 20.5491 25C16.4252 25 12.4702 23.3618 9.55421 20.4458C6.6382 17.5298 5 13.5748 5 9.45095C5.00007 8.11575 5.48681 6.82637 6.3691 5.82422C7.25138 4.82206 8.46869 4.17586 9.79311 4.0066C9.98932 3.98286 10.1879 4.02352 10.359 4.12247C10.5301 4.22142 10.6644 4.37328 10.7417 4.55519L13.0387 9.9148C13.0981 10.0534 13.1223 10.2046 13.1091 10.3549C13.096 10.5051 13.0459 10.6498 12.9633 10.776L11.0612 13.6822C10.9746 13.813 10.9235 13.9639 10.9127 14.1204C10.9019 14.2768 10.9319 14.4334 10.9997 14.5747V14.5747Z"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29" id="Telegram">
        <path d="M23.2701 4.61291L2.18588 10.5597C2.0085 10.6098 1.85062 10.7128 1.73334 10.8549C1.61605 10.9971 1.54495 11.1716 1.52954 11.3553C1.51413 11.539 1.55513 11.7229 1.64708 11.8827C1.73903 12.0424 1.87754 12.1702 2.0441 12.2491L11.7315 16.8379C11.9205 16.9274 12.0726 17.0795 12.1621 17.2685L16.7509 26.9559C16.8298 27.1225 16.9577 27.261 17.1174 27.3529C17.2771 27.4449 17.4611 27.4859 17.6447 27.4705C17.8284 27.4551 18.0029 27.384 18.1451 27.2667C18.2873 27.1494 18.3902 26.9915 18.4403 26.8141L24.3871 5.72991C24.4308 5.57504 24.4324 5.41132 24.3918 5.25561C24.3511 5.09991 24.2697 4.95785 24.156 4.84406C24.0422 4.73027 23.9001 4.64888 23.7444 4.60825C23.5887 4.56762 23.425 4.56923 23.2701 4.61291Z"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M12.2109 15.2632L16.7899 10.6842" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 6" id="ArrowSquare">
        <path d="M1 1L5 5L9 1" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="BurgerMenu">
        <path d="M5 16H27" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M5 8H27" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M5 24H27" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 104" id="BuildingIcon">
        <path d="M102.267 100.533H91.8667V43.3333C91.8667 42.3761 91.0906 41.6 90.1333 41.6H65.8667V1.73333C65.8667 0.7761 65.0906 0 64.1333 0H19.0667C18.1094 0 17.3333 0.7761 17.3333 1.73333V100.533H1.73333C0.7761 100.533 0 101.309 0 102.267C0 103.224 0.7761 104 1.73333 104H102.267C103.224 104 104 103.224 104 102.267C104 101.309 103.224 100.533 102.267 100.533ZM36.4 100.533H29.4667V84.9333C29.4667 83.9761 30.2428 83.2 31.2 83.2H34.6667C35.6239 83.2 36.4 83.9761 36.4 84.9333V100.533ZM43.3333 43.3333V100.533H39.8667V84.9333C39.8667 82.0614 37.5386 79.7333 34.6667 79.7333H31.2C28.3281 79.7333 26 82.0614 26 84.9333V100.533H20.8V3.46667H62.4V41.6H45.0667C44.1094 41.6 43.3333 42.3761 43.3333 43.3333ZM88.4 100.533H46.8V45.0667H88.4V100.533Z"></path>
        <path d="M55.25 24H44.75C43.7836 24 43 24.7836 43 25.75V36.25C43 37.2164 43.7836 38 44.75 38H55.25C56.2164 38 57 37.2164 57 36.25V25.75C57 24.7836 56.2164 24 55.25 24ZM53.5 34.5H46.5V27.5H53.5V34.5Z"></path>
        <path d="M55.25 7H44.75C43.7836 7 43 7.78356 43 8.75V19.25C43 20.2164 43.7836 21 44.75 21H55.25C56.2164 21 57 20.2164 57 19.25V8.75C57 7.78356 56.2164 7 55.25 7ZM53.5 17.5H46.5V10.5H53.5V17.5Z"></path>
        <path d="M38.25 24H27.75C26.7836 24 26 24.7836 26 25.75V36.25C26 37.2164 26.7836 38 27.75 38H38.25C39.2164 38 40 37.2164 40 36.25V25.75C40 24.7836 39.2164 24 38.25 24ZM36.5 34.5H29.5V27.5H36.5V34.5Z"></path>
        <path d="M38.25 7H27.75C26.7836 7 26 7.78356 26 8.75V19.25C26 20.2164 26.7836 21 27.75 21H38.25C39.2164 21 40 20.2164 40 19.25V8.75C40 7.78356 39.2164 7 38.25 7ZM36.5 17.5H29.5V10.5H36.5V17.5Z"></path>
        <path d="M38.25 42H27.75C26.7836 42 26 42.7836 26 43.75V54.25C26 55.2164 26.7836 56 27.75 56H38.25C39.2164 56 40 55.2164 40 54.25V43.75C40 42.7836 39.2164 42 38.25 42ZM36.5 52.5H29.5V45.5H36.5V52.5Z"></path>
        <path d="M38.25 59H27.75C26.7836 59 26 59.7836 26 60.75V71.25C26 72.2164 26.7836 73 27.75 73H38.25C39.2164 73 40 72.2164 40 71.25V60.75C40 59.7836 39.2164 59 38.25 59ZM36.5 69.5H29.5V62.5H36.5V69.5Z"></path>
        <path d="M70.75 80H81.25C82.2164 80 83 79.2164 83 78.25V67.75C83 66.7836 82.2164 66 81.25 66H70.75C69.7836 66 69 66.7836 69 67.75V78.25C69 79.2164 69.7836 80 70.75 80ZM72.5 69.5H79.5V76.5H72.5V69.5Z"></path>
        <path d="M70.75 63H81.25C82.2164 63 83 62.2164 83 61.25V50.75C83 49.7836 82.2164 49 81.25 49H70.75C69.7836 49 69 49.7836 69 50.75V61.25C69 62.2164 69.7836 63 70.75 63ZM72.5 52.5H79.5V59.5H72.5V52.5Z"></path>
        <path d="M70.75 97H81.25C82.2164 97 83 96.2164 83 95.25V84.75C83 83.7836 82.2164 83 81.25 83H70.75C69.7836 83 69 83.7836 69 84.75V95.25C69 96.2164 69.7836 97 70.75 97ZM72.5 86.5H79.5V93.5H72.5V86.5Z"></path>
        <path d="M53.75 80H64.25C65.2164 80 66 79.2164 66 78.25V67.75C66 66.7836 65.2164 66 64.25 66H53.75C52.7836 66 52 66.7836 52 67.75V78.25C52 79.2164 52.7836 80 53.75 80ZM55.5 69.5H62.5V76.5H55.5V69.5Z"></path>
        <path d="M53.75 63H64.25C65.2164 63 66 62.2164 66 61.25V50.75C66 49.7836 65.2164 49 64.25 49H53.75C52.7836 49 52 49.7836 52 50.75V61.25C52 62.2164 52.7836 63 53.75 63ZM55.5 52.5H62.5V59.5H55.5V52.5Z"></path>
        <path d="M53.75 97H64.25C65.2164 97 66 96.2164 66 95.25V84.75C66 83.7836 65.2164 83 64.25 83H53.75C52.7836 83 52 83.7836 52 84.75V95.25C52 96.2164 52.7836 97 53.75 97ZM55.5 86.5H62.5V93.5H55.5V86.5Z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 104" id="CraneIcon">
        <path d="M103.554 28.1269L97.0407 21.6137C96.7551 21.3279 96.3676 21.1674 95.9636 21.1674H91.3453L32.9782 0.0905821C32.5743 -0.0552617 32.1275 -0.0239804 31.7478 0.177113L4.40152 14.6544H3.15169C1.41375 14.6544 0 16.0684 0 17.8061V27.5758C0 29.261 1.33047 30.6375 2.99569 30.7196C3.04708 30.7249 3.09908 30.7275 3.15169 30.7275H19.5392V42.2303C19.5392 43.4157 20.1977 44.4494 21.1677 44.9875V94.4399H19.4344C18.593 94.4399 17.911 95.122 17.911 95.9633V100.953H16.1779C15.3365 100.953 14.6545 101.635 14.6545 102.477C14.6545 103.318 15.3365 104 16.1779 104H38.9738C39.8151 104 40.4972 103.318 40.4972 102.477C40.4972 101.635 39.8151 100.953 38.9738 100.953H37.2407V95.9636C37.2407 95.1222 36.5586 94.4401 35.7173 94.4401H33.9842V45.1453C34.9154 44.7651 35.6287 43.9528 35.8595 42.914L38.5677 30.7275H74.7953C75.6366 30.7275 76.3187 30.0454 76.3187 29.2041C76.3187 28.3627 75.6366 27.6806 74.7953 27.6806H31.2538L34.7202 24.2143H83.0424V27.6806H81.3099C80.4686 27.6806 79.7865 28.3627 79.7865 29.2041C79.7865 30.0454 80.4686 30.7275 81.3099 30.7275H83.0424V47.115C83.0424 49.2182 84.4082 51.0069 86.2989 51.6447V53.8647C86.2989 55.2463 87.1325 56.4535 88.373 56.8687C89.0801 57.1055 89.5554 57.7661 89.5554 58.513C89.5554 59.4687 88.7778 60.2461 87.8223 60.2461C86.8668 60.2461 86.0892 59.4685 86.0892 58.513C86.0892 57.6716 85.4072 56.9895 84.5658 56.9895C83.7245 56.9895 83.0424 57.6716 83.0424 58.513C83.0424 61.1487 85.1868 63.2929 87.8223 63.2929C90.4579 63.2929 92.6022 61.1485 92.6022 58.513C92.6022 56.4675 91.3079 54.6556 89.377 53.992C89.363 53.9675 89.3457 53.9199 89.3457 53.8649V51.6449C91.2364 51.0073 92.6022 49.2184 92.6022 47.1152V30.7277H102.477C103.093 30.7277 103.648 30.3566 103.884 29.7873C104.12 29.2181 103.989 28.5626 103.554 28.1269ZM30.9374 4.05375V11.6076L26.882 6.20058L30.9374 4.05375ZM24.2145 7.72219L29.4139 14.6544H24.2145V7.72219ZM30.9374 17.7013V23.6882L30.5321 24.0935L25.738 17.7013H30.9374ZM24.2145 20.7484L28.3556 26.2699L26.9449 27.6808H24.2145V20.7484ZM22.6773 30.7277C22.682 30.7277 22.6864 30.7283 22.6911 30.7283C22.6958 30.7283 22.7002 30.7277 22.7049 30.7277H26.0524V37.3457C26.0524 38.1871 26.7345 38.8692 27.5758 38.8692H33.6371L32.8851 42.2534C32.8744 42.3018 32.8323 42.3355 32.7827 42.3355H22.6911C22.6332 42.3355 22.5863 42.2886 22.5863 42.2307V30.7277H22.6773ZM29.4139 68.3875H24.2145V61.4553L29.4139 68.3875ZM25.738 84.4608H30.9374V91.3932L25.738 84.4608ZM29.4139 94.4401H24.2145V87.5079L29.4139 94.4401ZM24.2145 81.4139V74.4815L29.4139 81.4139H24.2145ZM25.738 71.4344H30.9374V78.3668L25.738 71.4344ZM25.738 58.4084H30.9374V65.3408L25.738 58.4084ZM24.2145 55.3613V48.4291L29.4139 55.3613H24.2145ZM25.738 45.3822H30.9374V52.3146L25.738 45.3822ZM14.6545 21.1676H14.5498C13.7085 21.1676 13.0264 21.8497 13.0264 22.6911C13.0264 23.5324 13.7085 24.2145 14.5498 24.2145H14.6545V27.6808H3.15169C3.0938 27.6808 3.04688 27.6339 3.04688 27.576V24.2145H8.03644C8.87778 24.2145 9.55987 23.5324 9.55987 22.6911C9.55987 21.8497 8.87778 21.1676 8.03644 21.1676H3.04688V17.8061C3.04688 17.7482 3.0938 17.7013 3.15169 17.7013H14.5496C14.6075 17.7013 14.6545 17.7482 14.6545 17.8061V21.1676ZM21.0626 27.681V27.6808H17.7013V17.8061C17.7013 16.0682 16.2876 14.6544 14.5496 14.6544H10.9137L21.1677 9.22593V16.1761C21.1677 16.1767 21.1677 16.1773 21.1677 16.1781C21.1677 16.1789 21.1677 16.1793 21.1677 16.1801V27.681H21.0626ZM34.1939 97.487V100.953H20.9578V97.487H34.1939ZM35.4463 30.7277L34.3143 35.8223H29.0993V30.7277H35.4463ZM34.089 21.1674V21.1676C34.0539 21.1676 34.0192 21.1705 33.9842 21.1727V3.69321L82.3745 21.1674H34.089ZM86.0891 30.7277H89.5552V42.6619C89.0175 42.4519 88.4333 42.3353 87.8221 42.3353C87.2109 42.3353 86.6267 42.4519 86.0891 42.6619V30.7277ZM87.8221 48.8483C86.8664 48.8483 86.0891 48.0707 86.0891 47.1152C86.0891 46.1597 86.8666 45.3822 87.8221 45.3822C88.7776 45.3822 89.5552 46.1597 89.5552 47.1152C89.5552 48.0707 88.7778 48.8483 87.8221 48.8483ZM89.5552 27.6808H86.0891V24.2145H89.5552V27.6808ZM92.602 27.6808V24.2145H95.3325L98.7986 27.6808H92.602Z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18" id="Place">
        <path d="M2 17H12" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
              stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M13 7.15385C13 12.6923 7 17 7 17C7 17 1 12.6923 1 7.15385C1 5.52174 1.63214 3.95649 2.75736 2.80242C3.88258 1.64835 5.4087 1 7 1C8.5913 1 10.1174 1.64835 11.2426 2.80242C12.3679 3.95649 13 5.52174 13 7.15385V7.15385Z"
              stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" id="YouTube">
        <path d="M16.1661 2.00789L16.1666 2.00964C16.3328 2.62103 16.4194 3.60477 16.4617 4.47274C16.4824 4.89901 16.492 5.28457 16.4964 5.5636C16.4986 5.70299 16.4995 5.81551 16.4998 5.89288L16.5 5.98148L16.5 6.00402L16.5 6.00951L16.4999 6.01077L16.4999 6.01102V6.01337V6.0134V6.01366L16.4999 6.01492L16.4999 6.02041L16.4999 6.0429L16.4993 6.13118C16.4986 6.20827 16.4973 6.32036 16.4946 6.45923C16.4891 6.73719 16.4783 7.12136 16.4567 7.54631C16.4128 8.41001 16.3264 9.39217 16.1658 10.0066C16.0146 10.5695 15.5742 11.012 15.0202 11.1634C14.7383 11.238 14.2014 11.3022 13.513 11.3521C12.8373 11.4011 12.0556 11.434 11.3109 11.456C10.5669 11.478 9.86384 11.489 9.34647 11.4945C9.08788 11.4973 8.87593 11.4986 8.72877 11.4993L8.55893 11.4999L8.51474 11.5L8.50357 11.5L8.50081 11.5H8.50015H8.5L8.49997 12L8.49995 11.5H8.4998H8.49914L8.4964 11.5L8.48527 11.5L8.44121 11.4999L8.27182 11.4993C8.12502 11.4986 7.91358 11.4971 7.65556 11.4943C7.13931 11.4886 6.43758 11.4772 5.69462 11.4543C4.95085 11.4315 4.16985 11.3974 3.49385 11.3465C2.80393 11.2946 2.26539 11.228 1.98157 11.1505L1.98126 11.1504C1.42642 10.9994 0.985262 10.5564 0.834017 9.99287C0.673647 9.38598 0.587153 8.40422 0.543213 7.53798C0.521615 7.1122 0.510797 6.72678 0.505388 6.44775C0.502685 6.30835 0.501338 6.19579 0.500666 6.11835L0.500081 6.02965L0.50001 6.00705L0.500001 6.00154L0.5 6.00026L0.5 6.00003V6.00001V6V6V5.99997L0.5 5.99974L0.500001 5.99848L0.50001 5.99299L0.500081 5.9705L0.500666 5.88222C0.501338 5.80513 0.502685 5.69304 0.505387 5.55417C0.510796 5.27621 0.521613 4.89204 0.54321 4.46709C0.587111 3.6033 0.673534 2.62103 0.834168 2.00657C0.985714 1.44276 1.44026 0.987278 1.98092 0.836267C2.26306 0.761811 2.79948 0.697777 3.48691 0.64792C4.16264 0.598912 4.94432 0.566009 5.68906 0.543998C6.433 0.522011 7.13611 0.511004 7.65348 0.505499C7.91206 0.502747 8.12401 0.501372 8.27118 0.500685L8.44102 0.500085L8.48521 0.50001L8.49638 0.500001L8.49913 0.5L8.49979 0.5H8.49994L8.49997 0L8.5 0.5H8.50015L8.50081 0.5L8.50356 0.500001L8.51472 0.500011L8.55892 0.500088L8.72879 0.500711C8.87599 0.501424 9.088 0.502851 9.34664 0.505706C9.86414 0.511419 10.5674 0.522841 11.3113 0.545656C12.0561 0.568497 12.8376 0.602636 13.5128 0.653471C14.2024 0.70539 14.738 0.772021 15.0169 0.849079L15.0187 0.849563C15.5738 1.00071 16.0151 1.44398 16.1661 2.00789ZM6.30954 8.56722V9.43558L7.06055 8.99965L11.4833 6.43243L12.2279 6.00023L11.4835 5.56768L7.06075 2.99779L6.30954 2.56129V3.4301V8.56722Z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" id="Instagram">
        <rect x="0.5" y="0.5" width="13" height="13" rx="3.5"></rect>
        <circle cx="7" cy="7" r="2.5"></circle>
        <circle cx="11" cy="3" r="0.5"></circle>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 21" id="Close">
        <path d="M1 3.5033L16 17.4965" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
        <path d="M16 3.6217L1.00006 17.3783" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"></path>
    </symbol>
</svg>

<nav class="--main">
    <div class="wrapper">
        <a href="/" class="logo">
            <img loading="lazy" src="<?= $options['logo'] ?>" alt="Dream Realty - логотип">
        </a>
        <div class="nav-content">
            <div class="for">
                <span>Для тех:</span>
                <div class="for_item">
                    <div class="title">
                        <p>У кого <br>есть мечта</p>
                    </div>
                    <ul>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            array(
                                "ROOT_MENU_TYPE" => "dream",
                                "MENU_CACHE_TYPE" => "Y",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
                <div class="for_item">
                    <div class="title">
                        <p>кому важны <br>детали</p>
                    </div>
                    <ul>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            array(
                                "ROOT_MENU_TYPE" => "details",
                                "MENU_CACHE_TYPE" => "Y",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
                <div class="for_item">
                    <div class="title">
                        <p>Кто ищет <br>своих</p>
                    </div>
                    <ul>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            array(
                                "ROOT_MENU_TYPE" => "find",
                                "MENU_CACHE_TYPE" => "Y",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
            </div>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</nav>

<div class="mouse-scroll">
    <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/mouse--white.svg" alt="">
    <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/svg/arrow-double--white.svg" alt="" class="arrow">
</div>

<main>
    <div class="main-slider">
        <?php

        $MY_HL_BLOCK_ID = 2;
        CModule::IncludeModule('highloadblock');
        $entity_data_class = GetEntityDataClass($MY_HL_BLOCK_ID);
        $rsData = $entity_data_class::getList(array(
            'select' => array('*'),
            'order' => array("UF_SORT" => "ASC"),
        ));
        $i = 1;
        while ($el = $rsData->fetch()) {
        //  print_r($el);
        $URL = CFile::GetPath($el[UF_IMAGE]);
        ?>

        <div class="slide slide-<?= $i ?>" data-title="<?= $el['UF_TITLEMENU'] ?>" data-color="<?= $el['UF_COLOR'] ?>"
        ">
        <div class=" wrapper">
            <h1><?= $el['UF_TITLE'] ?></h1>
            <a href="<?= $el['UF_LINKLINK'] ?>">
                <?= $el['UF_LINKTITLE'] ?>
            </a>
            <div class="buttons">
                <a href="<?= $el['UF_BUT1LINK'] ?>"><?= $el['UF_BUT1TITLE'] ?></a>
                <a href="<?= $el['UF_BUT2LINK'] ?>"><?= $el['UF_BUT2TITLE'] ?></a>
            </div>
        </div>
    </div>


    <?php
    $i++;
    }
    ?>

    </div>
</main>

<footer>
    <div class="mini">
        <div class="wrapper">
            <p><?= $options['copyright'] ?></p>
        </div>
    </div>
</footer>

<div class="burger_menu --main">
    <div class="wrapper">
        <div class="top">
            <a href="/"><img loading="lazy" src="<?= $options['logocolor'] ?>" alt=""></a>
            <div class="pop-up__close">
                <svg class="icon">
                    <use xlink:href="#Close"></use>
                </svg>
            </div>
            <div class="lists">
                <div class="list-item">
                    <p class="title">для тех:</p>
                </div>
                <div class="list-item">
                    <p class="title --lightGreen">у кого есть <br>мечта</p>
                    <ul>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            array(
                                "ROOT_MENU_TYPE" => "dream",
                                "MENU_CACHE_TYPE" => "Y",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
                <div class="group-list">
                    <div class="list-item">
                        <p class="title --lightBlue">кому важны <br>детали</p>
                        <ul>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "details",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>
                        </ul>
                    </div>
                    <div class="list-item">
                        <p class="title --lightOrange">кто ищет <br>своих</p>
                        <ul>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                array(
                                    "ROOT_MENU_TYPE" => "find",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="lists">
                <div class="list-item">

                </div>
                <div class="list-item">
                    <p>
                        <svg class="icon">
                            <use xlink:href="#Place"></use>
                        </svg>
                        <?= $options['adress'] ?>
                    </p>
                </div>
                <div class="list-item">
                    <a href="tel:<?= $options['phone'] ?>">
                        <svg class="icon">
                            <use xlink:href="#PhoneCall"></use>
                        </svg>
                        <?= $options['phone'] ?>
                    </a>
                </div>
                <div class="list-item soc-magic">
                    <div class="soc-icons">
                        <a target="_blank" href="<?= $options['tg'] ?>">
                            <svg class="icon">
                                <use xlink:href="#Telegram"></use>
                            </svg>
                        </a>
                        <a title="* Деятельность организации «Meta» признана экстремистской и запрещена на территории Российской Федерации"
                           target="_blank" href="<?= $options['ig'] ?>">
                            <svg class="icon">
                                <use xlink:href="#Instagram"></use>
                            </svg>
                        </a>
                        <a target="_blank" href="<?= $options['youtube'] ?>">
                            <svg class="icon">
                                <use xlink:href="#YouTube"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/vendor-6654c734ccab8f440ff0825eb443dc7f.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/script.js"></script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

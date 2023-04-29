const Tabs = document.querySelectorAll('.main .container .profile_page .account .directions ul li')

const Contents = document.querySelectorAll('.main .container .profile_page .content div')

const SubscriptionInformation = document.querySelector('.main .container .profile_page .content .subscription-information')
const Orders = document.querySelector('.main .container .profile_page .content .orders')
const SuccessfulPayments = document.querySelector('.main .container .profile_page .content .successful-payments')
const PromoCodes = document.querySelector('.main .container .profile_page .content .promo-codes')
const Messages = document.querySelector('.main .container .profile_page .content .messages')

Tabs.forEach(Tab => {
    SubscriptionInformation.classList.add('active')


    Tab.addEventListener('click', () => {
        Tabs.forEach(Tab => {
            Tab.classList.remove('active')
        })

        Tab.classList.add('active')

        if (Tab.innerText == 'Üyelik Bilgilerim'){
            Contents.forEach(Content => Content.classList.remove('active'))
            SubscriptionInformation.classList.add('active')
        } else if (Tab.innerText == 'Siparişlerim'){
            Contents.forEach(Content => Content.classList.remove('active'))
            Orders.classList.add('active')
        } else if (Tab.innerText == 'Başarılı Ödemelerim'){
            Contents.forEach(Content => Content.classList.remove('active'))
            SuccessfulPayments.classList.add('active')
        } else if (Tab.innerText == 'Promo Kodlarım'){
            Contents.forEach(Content => Content.classList.remove('active'))
            PromoCodes.classList.add('active')
        } else if (Tab.innerText == 'Mesajlarım'){
            Contents.forEach(Content => Content.classList.remove('active'))
            Messages.classList.add('active')
        }
    })
})
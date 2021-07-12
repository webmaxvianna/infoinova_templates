mobiscroll.setOptions({
    locale: mobiscroll.localePtBR,
    theme: 'ios',
    themeVariant: 'light',
});

var now = new Date();

$(function () {

    var inst = $('#demo-loading-inline-data').mobiscroll().eventcalendar({
        firstDay: 0,
        view: {
            calendar: { type: 'week' },
            agenda: { type: 'day' }
        },
        renderEventContent: function (data) {
            return '' +
            '<div class="my-title">' + data.title + '</div>' +
            '<div class="my-custom-field">' + data.original.location + '</div>';
        },
        data: [{ // ----- ANUALMENTE -----
                recurring: {
                    repeat: 'yearly',
                    month: 07,
                    day: 10,
                    from: '2020',
                    until: '2026'

                },
                recurringExceptionRule: {
                    repeat: 'weekly',
                    weekDays: 'SA,SU'
                },
                allDay: false,
                start: '09:00',
                end: '10:00',
                title: 'Evento Anual',
                location:'Sala 5',
                description: 'Pellentesque nec ultricies neque, in laoreet massa. Donec lectus nisi, ultrices a pharetra et, convallis nec sem. Sed fringilla venenatis erat sit amet sollicitudin.',
                color: '#37bbe4'
            }, { // ----- MENSALMENTE -----
                recurring: {
                    repeat: 'monthly',
                    day: 13,
                    from: '2021-06-01',
                    until: '2021-12-31'

                },
                recurringExceptionRule: {
                    repeat: 'weekly',
                    weekDays: 'SA,SU'
                },
                allDay: false,
                start: '09:00',
                end: '10:00',
                title: 'Evento Mensal',
                location:'Sala 4',
                description: 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam semper ligula ac finibus interdum. Donec in hendrerit justo.',
                color: '#37bb88'
            }, { // ----- SEMANALMENTE -----
                recurring: {
                    repeat: 'weekly',
                    weekDays: 'MO,TU',
                    from: '2021-07-02',
                    until: '2021-10-28'

                },
                allDay: false,
                start: '09:00',
                end: '10:00',
                title: 'Evento Semanal',
                location:'Sala 2',
                description: 'Quisque eget placerat risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc at ultricies est.',
                color: '#37bb00'
            }, { // ----- DIÁRIO -----
                recurring: {
                    repeat: 'daily',
                    from: '2021-07-02',
                    until: '2021-07-28'
                },
                recurringException: ['2021-07-13', '2021-07-14'],
                recurringExceptionRule: {
                    repeat: 'weekly',
                    weekDays: 'SA,SU'
                },
                allDay: false,
                start: '09:00',                
                end: '10:00',
                title: 'Evento Diário',
                location:'Sala 3',
                description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sagittis pellentesque massa, non porta est finibus ut.',
                color: '#ddbb00'
            },{ // ----- SIMPLES -----
                start: '2021-07-12T13:00',
                end: '2021-07-12T17:00',
                allDay: false,
                title: 'Evento Simples',
                location:'Sala 1',
                description: 'Phasellus hendrerit consequat ante, nec fringilla nisi tempor pulvinar. Phasellus sed ante sed urna accumsan facilisis et dapibus augue.',
                color: '#017406'
            },{ // ----- SIMPLES DIA INTEIRO -----
                start: '2021-07-12',
                end: '2021-07-12',
                allDay: true,
                title: 'Evento Simples Dia Inteiro',
                location:'Sala 6',
                description: '',
                color: '#012506'
            }
        ],
        onEventClick: function (event, inst) {
            mobiscroll.confirm({
                title: event.event.title,
                message: event.event.description,
                cancelText: 'Cancelar',
                okText: 'Visualizar Evento',
                callback: function (res) {
                    if (res) {
                        window.location.href="admin_page.php";
                    }
                }
            });
        }
    });
});
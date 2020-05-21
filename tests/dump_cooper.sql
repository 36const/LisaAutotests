-- DROP TABLE IF EXISTS "market" CASCADE; комментим дроп, если в suite.yml значение cleanup: true
create table market
(
    id serial not null
        constraint "sellerMarketParams_pkey"
            primary key,
    test_market smallint default 0 not null,
    api_send_order smallint default 0 not null,
    api_send_order_url varchar(150),
    sla_id integer,
    title_translit varchar(200),
    warehouse integer default 0,
    created timestamp(0) default ('now'::text)::timestamp(0) with time zone not null,
    updated timestamp,
    logo varchar(255),
    title varchar(255),
    business_model varchar(3),
    comments varchar(1000) default NULL::character varying,
    owox_id bigint default 0,
    auto_block smallint default 1,
    status integer default 0,
    use_api boolean default false not null,
    set_api boolean default false not null,
    resident smallint default 1 not null,
    owox_id_history integer,
    create_ip inet,
    sms_template_id integer,
--         constraint fk_sms_template_id
--             references sms_template,
    manager_id integer,
    check_stock boolean default false not null,
    description varchar(512),
    extended_description varchar(1500),
    verification_ts timestamp(0),
    goods_management smallint default 1,
    unblock_notification timestamp(0) default NULL::timestamp without time zone,
    show_steps boolean default false not null,
    reg_source char(3) default 'adm'::bpchar not null,
    combination_owox_parent_id integer,
    primary_phone varchar(15),
    is_show_phone boolean default false not null,
    edit_timetable boolean default true,
    timetable_type smallint,
    "group" smallint default 0 not null,
    date_negative_balance timestamp(0),
    is_reliable boolean default false not null,
    agent_id integer,
    logo_svg varchar(255) default ''::character varying,
    mobile_logo_svg varchar(255) default ''::character varying,
    big_logo_svg varchar(255) default ''::character varying,
    credit_broker boolean default false,
    rz_manager_id integer,
    initiator_email varchar(255) default NULL::character varying,
    justin_login varchar(255),
    justin_uuid varchar(255),
    comment_user_id integer,
    auto_hold boolean default true,
    order_autocomplete integer default 45,
    big_logo varchar(255) default NULL::character varying,
    mobile_logo varchar(255) default NULL::character varying
);

comment on column market.test_market is 'Тестовый магазин';

comment on column market.api_send_order is 'признак посылать ордера на API клиента';

comment on column market.api_send_order_url is 'url API клиента';

comment on column market.logo is 'Логотип магазина';

comment on column market.title is 'Название магазина';

comment on column market.business_model is 'Бизнес модель';

comment on column market.comments is 'Комментарий к магазину';

comment on column market.auto_block is 'автоблокировка продавца';

comment on column market.use_api is 'Работает через API';

comment on column market.set_api is 'Используется для Продавцов';

comment on column market.resident is 'резидент/нерезидент';

comment on column market.create_ip is 'Ip с которого создан магазин';

comment on column market.manager_id is 'Id менеджера, что создал маркет';

comment on column market.check_stock is 'Учитывать остатки';

comment on column market.description is 'Описание магазина';

comment on column market.extended_description is 'Расширенное описание';

comment on column market.verification_ts is 'Дата первой верификации';

comment on column market.goods_management is 'Признак управления товарами: 

             0 - В ручную,

             1 - По прайсу,
';

comment on column market.unblock_notification is 'Дата напоминания о возврате из статуса Проблемный';

comment on column market.show_steps is 'Флаг для отображения шагов в ЛК';

comment on column market.reg_source is 'Источник регистрации магазина';

comment on column market.combination_owox_parent_id is 'ID папки комбинаций на Owox';

comment on column market.primary_phone is 'Телефон для отображения на сайте';

comment on column market.is_show_phone is 'Выводить ли телефон на сайте';

comment on column market.edit_timetable is 'Чи можливо редагувати графік роботи на стороні магазину(продавця через ЛК)';

comment on column market.timetable_type is 'Тип графіку роботи: 0 - графік не задано; 1 - користувацький; 2,3,4 - стандартні типи';

comment on column market."group" is '0-Все\n,1-Аптеки';

comment on column market.date_negative_balance is 'Дата начала нулевого или отрицательного баланса.';

comment on column market.is_reliable is 'Признак надежного продавеца';

comment on column market.logo_svg is 'Лого в формате SVG';

comment on column market.mobile_logo_svg is 'Лого для мобильного в формате SVG';

comment on column market.big_logo_svg is 'Лого большого размера в формате SVG';

comment on column market.credit_broker is 'Кредитный брокер';

comment on column market.rz_manager_id is 'Привлеченец менеджер Розетки';

comment on column market.initiator_email is 'Email инициатора блокировки';

comment on column market.justin_login is 'Логин магазина для доставки Justin';

comment on column market.justin_uuid is 'ID магазина в системе Justin';

comment on column market.comment_user_id is 'ID системного пользователя (для комментариев)';

comment on column market.auto_hold is 'Автоматичне підтверждення списання коштів при імпорті замовлення (TRUE - автоматичне, FALSE - через адмінку лікпею)';

comment on column market.order_autocomplete is 'Период аутокомплита ордеров магазина';

comment on column market.big_logo is 'Лого большого размера';

comment on column market.mobile_logo is 'Лого для мобильной команды';

-- alter table market owner to ptic;

create index idx_rz_manager_id
    on market (rz_manager_id);

create index market_idx_owox_id
    on market (owox_id);

create index market_owox_id_history_idx
    on market (owox_id_history);

create unique index primary_sellermarketparams_idx
    on market (id);

create table admin_market_link
(
    account_id integer not null,
    market_id integer not null
        constraint admin_market_link_pk
            primary key
);

-- alter table admin_market_link owner to ptic;

create index idx_account_id
    on admin_market_link (account_id);

create index idx_admin_market_id
    on admin_market_link (market_id);

-- DROP TABLE IF EXISTS "admin" CASCADE;
create table admin
(
    id serial not null
        constraint account_pkey
            primary key,
    login varchar not null
        constraint account_login_key
            unique,
    password varchar,
    email varchar,
    status integer default 0 not null
        constraint account_status_chk
            check ((status = 1) OR (status = 0)),
    created_at timestamp default ('now'::text)::timestamp(0) with time zone not null,
    updated_at timestamp,
    access_token varchar(255),
    fio_ru varchar(255),
    fio_uk varchar(255),
    fio_en varchar(255),
    billing_user_id integer
        constraint admin_billing_user_id_key
            unique,
    billing_auth_hash varchar(32),
    inner_number integer,
    department_id integer,
    phone varchar(13)
);

comment on table admin is 'Пользователи админки';

comment on column admin.status is '1 - Активный; 0 -Неактивный';

comment on column admin.fio_ru is 'ФИО (рус)';

comment on column admin.fio_uk is 'ФИО (укр)';

comment on column admin.fio_en is 'ФИО (анг)';

comment on column admin.billing_user_id is 'Billing User ID';

comment on column admin.billing_auth_hash is 'Billing auth hash';

comment on column admin.inner_number is 'Внутренний номер сотрудника';

comment on column admin.department_id is 'Статус получения информации о балансе';

comment on column admin.phone is 'Мобильный телефон';

-- alter table admin owner to ptic;

create index admin_department_id
    on admin (department_id);

-- create trigger "onUpdate"
--     before update
--     on admin
--     for each row
-- execute procedure update_at_timestamp_field();


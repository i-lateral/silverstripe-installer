<?php

/**
 * ContactPage is a special type of user form that allows for adding of
 * specific contact information 
 * 
 */
class ContactPage extends UserDefinedForm {
    
    private static $icon = "app/images/contact.png";

    private static $description = "Display contact info and form";

    private static $singular_name = 'Contact Page';

    private static $plural_name = 'Contact Page';
    
    private static $db = array(
        "PhoneNumber"   => "Varchar(15)",
        "Email"         => "Varchar(50)",
        "Address"       => "HTMLText",
        "MapEmbed"      => "HTMLText"
    );
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $contact_fields = ToggleCompositeField::create(
            "ContactInfo",
            "Contact Info",
            FieldList::create(
                TextField::create('PhoneNumber','Phone Number'),
                TextField::create('Email','Email'),
                TextareaField::create('Address','Address'),
                TextareaField::create('MapEmbed','Map Embed Code')
            )
        );
        
        $fields->addFieldToTab("Root.Main",$contact_fields);
        
        return $fields;
    }
    
}

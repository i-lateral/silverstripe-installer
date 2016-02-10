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
        "MapEmbed"      => "HTMLText",
        "BlockJquery"	=> "Boolean"
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
     
    public function getSettingsFields() {
		$fields = parent::getSettingsFields();
		
		$fields->addFieldToTab("Root.Settings",CheckboxField::create('BlockJquery','Block additional jquery from loading?'));
		
		return $fields;
	}

	/**
	 * Get contact form
	 */
	public function getContactForm(){
		$className = Controller::curr()->ClassName;
		
		if($this->ID){
			if($className == 'ContactPage'){
				return Controller::curr()->Form();
			}
			else{
				$cpc = new ContactPage_Controller($this);
				
				$cpc->init();
				
				return $cpc->Form();
			}
		}
		
		return false;
	}
    
}

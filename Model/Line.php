<?php

class Line extends AppModel {

    public $_schema = array(
        'file' => array(
            'type' => 'file'
        ),
    );

    public $validate = array('caption' => 'notEmpty');


    /**
     * Behavior settings for both FileValidation and Attachment.
     *
     * @access public
     * @var array
     */
    public $actsAs = array(
        'Uploader.FileValidation' => array(
            'file' => array(
                'extension' => array(
                    'value' => array('txt', 'csv'),
                    'error' => 'Only text and csv files are valid',
                ),
                'filesize' => array(
                    'value' => 0, //set later with db call
                    'error' => 'Filesize is too large. Please limit to 2048KB or under.'
                ),
                'required' => true,
            )
        ),
        'Uploader.Attachment' => array(
            'file' => array(
                'name' => 'uploaderFilename',
                'uploadDir' => '/files/uploads/',
                'dbColumn' => 'path',
                'maxNameLength' => 30,
                'overwrite' => true,
                'stopSave' => false,
                'transforms' => array(
                    // Save additional images in the databases after transforming
                    array(
                        'method' => 'resize',
                        'width' => 100,
                        'height' => 100,
                        'dbColumn' => 'path_alt'
                    )
                ),
                'metaColumns' => array(
                    'size' => 'filesize',   // The size value will be saved to the filesize column
                    'type' => 'type'        // And the same for the mimetype
                )
            ),
        )
    );


    public function getValidationRules()
    {
        $setting_name = 'FILE_UPLOAD_MAX_KB';


        $temp =  array(
            'file' => array(
                'filesize' => array(
                    'value' => $result[0]['value']*1000,
                    'error' => 'Filesize is too large. Please limit to 2048KB or under.'
                ),
                'extension' => array(
                    'value' => array('csv'),
                    'error' => 'Only csv documents are valid.'
                ),

                'required' => true,
            )
        );



        return $temp;
    }


    public function load($path)
    {
        # create file object
        $file = new File("files/uploads/" . $path);

        # read the data
        $byte = $file->read();

        # close the file
        $close1 = $file->close();

        return $byte;
    }

}

?>

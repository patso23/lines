<?php
App::uses('Xml', 'Utility');

class RssComponent extends Component {

    /**
     * Reads an (external) RSS feed and returns it's items.
     *
     * @param $feed - The URL to the feed.
     * @param int $items - The amount of items to read.
     * @return array
     * @throws InternalErrorException
     */
    public function read($feed, $items = 5) {
        try {
            // Try to read the given RSS feed
            $xmlObject = Xml::build($feed);
        } catch (XmlException $e) {
            // Reading XML failed, throw InternalErrorException
            throw new InternalErrorException();
        }

        $output = array();

        for($i = 0;$i < $items;$i++):
            if(is_object($xmlObject->channel->item->$i)) {
                $output[] = $xmlObject->channel->item->$i;
            }
endfor;

return $output;
    }

}

<?php
function add_contact($data)
{
    global $conn;

    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $phone_number = $data['phone_number'];
    $address = $data['address'];
    $city = $data['city'];
    $postal_code = $data['postal_code'];
    $country = $data['country'];
    $user_id = $_SESSION['login']['id'];

    try {
        $sql = "INSERT INTO phone_book (firstname, lastname, phone_number, address, city, postal_code, country, user_id) VALUES ('$firstname', '$lastname', '$phone_number', '$address', '$city', '$postal_code', '$country', '$user_id')";
        $conn->query($sql);
        return 'checked';
    } catch (PDOException $error) {
        return $error->getMessage();
    }
}

function get_all_contacts($user_id)
{
    global $conn;

    try {
        $sql = "SELECT * FROM phone_book WHERE user_id = '$user_id'";
        $result = $conn->query($sql);
        return $result->fetchAll();
    } catch (PDOException $error) {
        return $error->getMessage();
    }
}

function get_contact_by_id($id)
{
    global $conn;

    try {
        $sql = "SELECT * FROM phone_book WHERE id = '$id'";
        $result = $conn->query($sql);
        return $result->fetch();
    } catch (PDOException $error) {
        return $error->getMessage();
    }
}

function edit_contact_by_id($id, $data)
{
    global $conn;
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $phone_number = $data['phone_number'];
    $address = $data['address'];
    $city = $data['city'];
    $postal_code = $data['postal_code'];
    $country = $data['country'];

    $sql = "UPDATE phone_book SET firstname = '$firstname', lastname = '$lastname', phone_number = '$phone_number', address = '$address', city = '$city', postal_code = '$postal_code', country = '$country' WHERE id = '$id'";
    $conn->query($sql);
}

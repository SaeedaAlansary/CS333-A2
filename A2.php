<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Nationalities</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
  >
</head>
<body>
  <main class="container">
    <h1>Statistics of Students Nationalities</h1>
    <table>
      <thead>
        <tr>
          <th><b>Year</b></th>
          <th><b>Semester</b></th>
          <th><b>The Programs</b></th>
          <th><b>Nationality</b></th>
          <th><b>Colleges</b></th>
          <th><b>Number of Students</b></th>
        </tr>
      </thead>
      <tbody>
        <?php   
        // // Define the API URL
        //     $URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

        //     // Fetch data from the API
        //     $response = file_get_contents($URL);

        //     // Check if the response was successfully fetched
        //     if ($response === FALSE) {
        //         die("Error: Unable to fetch data from the API.");
        //     }

        //     // Debugging: Output the raw API response
        //     echo "<pre>";
        //     print_r($response);
        //     echo "</pre>";

        //     // Decode the JSON response
        //     $result = json_decode($response, true);

        //     // Debugging: Check the structure of the decoded result
        //     echo "<pre>";
        //     print_r($result);
        //     echo "</pre>";

          // Define the API URL
          
          // Fetch data from the API
        //   $ch = curl_init($URL);
        //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //   $response = curl_exec($ch);
        //   curl_close($ch);
        //   $result = json_decode($response, true);

        $URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";  
        $response = file_get_contents($URL);
          $results = json_decode($response, true);
        /* echo "<pre>";
        print_r($results);
        echo "</pre>";
        Check if data was successfully fetched and parsed
           foreach ($results['results'] as $record) {
          $year = $record['results']['year'] ?? "N/A";
          $college = $record['results']['colleges'] ?? "N/A";
          $program = $record['results']['the_programs'] ?? "N/A";
          $nationality = $record['results']['nationality'] ?? "N/A";
          $num_students = $record['results']['number_of_students'] ?? "N/A";
          echo "<tr>
          <td>$year</td>
          <td>$college</td>
          <td>$program</td>
          <td>$nationality</td>
          <td>$num_students</td>
          </tr>";
          } */
            if ($results && isset($results['results'])) {
            foreach ($results['results'] as $record) {
                $year = $record['year'] ?? "N/A";
                $semester = $record['semester'] ?? "N/A";                
                $program = $record['the_programs'] ?? "N/A";
                $nationality = $record['nationality'] ?? "N/A";
                $college = $record['colleges'] ?? "N/A";
                $num_students = $record['number_of_students'] ?? "N/A";
            
                echo "<tr>
                        <td>$year</td>
                        <td>$semester</td>
                        <td>$program</td>
                        <td>$nationality</td>
                        <td>$college</td>
                        <td>$num_students</td>
                      </tr>";
            }
            
          } else {
              echo "<tr><td colspan='4'>No data available or failed to fetch data</td></tr>";
          }
        ?>
</tbody>
    </table>
  </main>
</body>
</html>

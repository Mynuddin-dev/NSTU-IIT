class Graph:
  def __init__(self):
    self.graph = {}

  def add(self, node, neighbour):

    if node in self.graph:
      self.graph[node].append(neighbour)
    else:
      self.graph[node] = [neighbour]
    

  def print(self, root):

    visited = []
    stack = [root]

    visited.append(root)

    while stack:
      node = stack.pop(0)

      if len(self.graph[node]) > 0:
        path = ""
        val = 1000000
        for neighbour in self.graph[node]:
          if heuristic[neighbour] < val:
            val = heuristic[neighbour]
            path = neighbour
        
        print(path)
        stack.append(path)

      if path == 'Bucarest':
        break



graph = Graph()
graph.add('Arad', 'Zerind')                    
graph.add('Zerind', 'Zerind')                  
graph.add('Arad', 'Timisoara')                 
graph.add('Timisoara', 'Timisoara')            
graph.add('Arad', 'Sibiu')                    
graph.add('Sibiu', 'Fagaras')                 
graph.add('Sibiu', 'Rimnicu Vilcea')           
graph.add('Rimnicu Vilcea', 'Rimnicu Vilcea')                                         
graph.add('Fagaras', 'Bucarest')
graph.add('Bucarest', 'Bucarest')

heuristic = {
  'Arad': 366,
  'Zerind': 374,
  'Timisoara': 329,
  'Bucarest': 0,
  'Sibiu': 253,
  'Fagaras': 176,
  'Rimnicu Vilcea': 193,
  
}

print ("Best first search Traversal:\nArad")
graph.print('Arad')


  